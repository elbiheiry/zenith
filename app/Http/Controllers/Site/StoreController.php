<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductSpecification;
use App\Models\School;
use App\Repositories\{AccessoryRepository, BundleRepository, ProductRepository , ProductImageRepository , SchoolRepository , CapacityRepository};
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StoreController extends Controller
{
    use ImageTrait;

    public $productRepository , $schoolRepository , $productImageRepository , $capacityRepository , $accessoryRepository , $bundleRepository;

    public function __construct(
        ProductRepository $productRepository , 
        SchoolRepository $schoolRepository , 
        ProductImageRepository $productImageRepository ,
        CapacityRepository $capacityRepository,
        AccessoryRepository $accessoryRepository,
        BundleRepository $bundleRepository
    )
    {
        $this->productRepository = $productRepository;
        $this->schoolRepository = $schoolRepository;
        $this->productImageRepository = $productImageRepository;
        $this->capacityRepository = $capacityRepository;
        $this->accessoryRepository = $accessoryRepository;
        $this->bundleRepository = $bundleRepository;
    }

    public function index($slug)
    {
        $products = $this->productRepository->list();
        $accessories = $this->accessoryRepository->list();
        $school = School::whereSlug($slug)->firstOrFail();
        $school['logo'] = $this->get_image( $school->logo, 'schools');
        $bundles = $this->bundleRepository->showBySchool($school->id);

        return view('site.pages.store.index' ,compact('products' , 'bundles','accessories' , 'school'));
    }

    public function show($slug)
    {
        $product = $this->productRepository->showBySlug($slug);
        $images = $this->productImageRepository->listByLocale($product);
        $related_products = $this->productRepository->related($product['id']);
        $specifications = $product['specifications'];

        //retrieve all colors related to this product
        $colors = [];
        foreach ($specifications['data'] as $key => $item) {
            $data = [
                'color_name' => $item['color']['name_'.locale()],
                'color_id' => $item['color_id']
            ];
            if ($item['color_id'] != 1) {
                array_push($colors , $data);
            }
        }
        $allColors = array_unique($colors , SORT_REGULAR);

        //retrieve all capacities related to this product
        $capacities = [];
        foreach ($specifications['data'] as $item) {
            if($item['capacity_id'] != null){
                $data = [
                    'capacity_name' => $item['capacity']['name_'.locale()],
                    'capacity_id' => $item['capacity_id']
                ];
    
                array_push($capacities , $data);
            }
        }
        $allCapacities = array_unique($capacities , SORT_REGULAR);

        //retrieve all connectivities related to this product
        $connectivities = [];
        foreach ($specifications['data'] as $item) {
            if($item['connectivity'] != null){
                $data = [                
                    'connectivity' => $item['connectivity']
                ];

                array_push($connectivities , $data);
            }
        }
        $allConnectivities = array_unique($connectivities , SORT_REGULAR);

        //retrieve all types related to this product
        $types = [];
        foreach ($specifications['data'] as $item) {
            if($item['type'] != null){
                $data = [                
                    'type' => $item['type']
                ];

                array_push($types , $data);
            }
        }
        $allTypes = array_unique($types , SORT_REGULAR);

        return view('site.pages.store.show' ,compact('product' , 'related_products' , 'images' , 'allColors' , 'allCapacities' , 'allConnectivities', 'allTypes'));
    }

    public function price(Request $request, $id)
    {
        $capacity = $request->capacity;
        $connectivity = $request->connectivity;
        $color = $request->color;
        $type = $request->type;

        $spec = ProductSpecification::where('product_id' , $id);

        if ($capacity) {
            $spec = $spec->where('capacity_id' , $capacity);
        }

        if ($connectivity) {
            $spec = $spec->where('connectivity' , $connectivity);
        }

        if ($color) {
            $spec = $spec->where('color_id' , $color);
        }

        if ($color) {
            $spec = $spec->where('type' , $type);
        }

        $spec = $spec->first();

        if ($spec) {
            $price = $spec->price;
            $sku = $spec->sku;
        }else{
            $price = null;
            $sku = null;
        }

        return response()->json([
            'price' => $price,
            'sku' => $sku
        ] , 200);
    }

    public function add_to_cart(Request $request , $id)
    {
        $sku = $request->sku;
        $spec = ProductSpecification::where('sku' , $sku)->first();

        if (!$sku) {
            return failed_validation(locale() == 'en' ? 'Please select proper credentials' : 'برجاء إختيار البيانات المناسبة');
        }

        $product = $this->productRepository->showById(Product::findOrFail($id));
        

        $quantity = $request->quantity;
        $item = \Cart::get($id.$spec->id);

        try {
            if ($item != null){
                $attributes = $item['attributes'];

                $attributes['sku'] = $spec->sku;

                \Cart::update($item->id , [
                    'quantity' => $quantity,
                    'attributes' => $attributes
                ]);
                return response()->json([
                    'message' => locale() == 'en' ? 'Cart has been updated successfully' :'تم تحديث كميه المنتج في سله الشراء بنجاح',
                    'html' => view('site.layouts.cart')->render(),
                    'counter' => \Cart::getContent()->count()
                ] ,200);
            }else{
                $price = $spec->price;
                $id = $id.$spec->id;

                \Cart::add([
                    'id' => $id,
                    'name' => $product['name_en'],
                    'quantity' => $quantity ? $quantity : 1,
                    'price' => $price,
                    'associatedModel' => 'product',
                    'attributes' => [
                        'id' => $product['id'],
                        'image' => $product['image_path'],
                        'name_en' => $product['name_en'],
                        'name_ar' => $product['name_ar'],
                        'slug' => $product['slug'],
                        'sku' => $spec->sku
                    ]
                ]);
            }
            return response()->json([
                'message' => locale() == 'en' ? 'Product added to cart successfully' : 'تم إضافه المنتج لسلة المشتريات بنجاح',
                'html' => view('site.layouts.cart')->render(),
                'counter' => \Cart::getContent()->count()
            ] ,200);
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return error_response();
        }
    }

    public function change_image(Request $request)
    {
        $color = $request->color;
        $id = $request->id;

        $images = $this->productImageRepository->listByColor($color , $id);
        $productCollection = Product::findOrFail($id);
        $product = $this->productRepository->showBySlug($productCollection->slug);
        
        return response()->json(view('site.pages.store.templates.slider' ,compact('images' , 'product'))->render(), 200);
    }
}
