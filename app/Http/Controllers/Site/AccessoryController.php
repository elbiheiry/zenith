<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Accessory;
use App\Models\AccessorySpecification;
use App\Repositories\{AccessoryRepository,AccessoryImageRepository, AccessorySpecificationRepository};
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AccessoryController extends Controller
{
    use ImageTrait;

    public $accessoryImageRepository , $accessoryRepository , $accessorySpecificationRepository;

    public function __construct(
        AccessoryRepository $accessoryRepository,
        AccessoryImageRepository $accessoryImageRepository ,
        AccessorySpecificationRepository $accessorySpecificationRepository
        
    )
    {
        $this->accessoryRepository = $accessoryRepository;
        $this->accessoryImageRepository = $accessoryImageRepository;
        $this->accessorySpecificationRepository = $accessorySpecificationRepository;
    }

    public function show($slug)
    {
        $accessory = $this->accessoryRepository->showBySlug($slug);
        $images = $this->accessoryImageRepository->list($accessory['id']);
        $relates = $this->accessoryRepository->related($accessory['id']);
        $specifications = $accessory['specifications'];

        //retrieve all colors related to this accessory
        $colors = [];
        $allColors = $this->accessorySpecificationRepository->list($accessory['id']);
        foreach ($allColors['data'] as $key => $color) {
            if ($color['color_id'] != null) {
                $data = [
                    'color_name' => $color['color_id'] != null ? $color['color']['name_'.locale()] : null,
                    'color_id' => $color['color_id']
                ];
                if ($color['color_id'] != 1) {
                    array_push($colors , $data);
                }
            }
        }
        $allColors = array_unique($colors , SORT_REGULAR);

        //retrieve all languages related to this accessory
        $languages = [];
        $allLanguages = $this->accessorySpecificationRepository->list($accessory['id']);
        foreach ($allLanguages['data'] as $key => $language) {
            if ($language['locale'] != null) {
                $data = [
                    'locale' => $language['locale'],
                ];
                array_push($languages , $data);
            }
        }
        $allLanguages = array_unique($languages , SORT_REGULAR);

        return view('site.pages.accessories.index' ,compact('accessory' , 'images' , 'relates' , 'allLanguages' , 'allColors'));
    }

    public function price(Request $request, $id)
    {
        $color = $request->color;
        $locale = $request->locale;

        $spec = AccessorySpecification::where('accessory_id' , $id);

        if ($color) {
            $spec = $spec->where('color_id' , $color);
        }
        if ($locale) {
            $spec = $spec->where('locale' , $locale);
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
        $spec = AccessorySpecification::where('sku' , $sku)->first();

        if (!$sku) {
            return failed_validation(locale() == 'en' ? 'Please select proper credentials' : 'برجاء إختيار البيانات المناسبة');
        }

        $accessory = $this->accessoryRepository->showById(Accessory::findOrFail($id));

        $quantity = $request->quantity;
        $item = \Cart::get($id);

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

                \Cart::add([
                    'id' => $id,
                    'name' => $accessory['name_en'],
                    'quantity' => $quantity ? $quantity : 1,
                    'price' => $price,
                    'associatedModel' => 'accessory',
                    'attributes' => [
                        'id' => $accessory['id'],
                        'image' => $accessory['image_path'],
                        'name_en' => $accessory['name_en'],
                        'name_ar' => $accessory['name_ar'],
                        'slug' => $accessory['slug'],
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
            // dd($th->getMessage());
            return error_response();
        }
    }

}

