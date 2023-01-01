<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Bundle;
use App\Models\ProductSpecification;
use App\Repositories\BundleRepository;
use App\Repositories\ProductImageRepository;
use Illuminate\Http\Request;

class BundleController extends Controller
{
    public $bundleRepository , $productImageRepository;

    public function __construct(BundleRepository $bundleRepository , ProductImageRepository $productImageRepository)
    {
        $this->bundleRepository = $bundleRepository;
        $this->productImageRepository = $productImageRepository;
    }

    public function index($slug)
    {
        $bundle = $this->bundleRepository->showBySlug($slug);
        $spec = ProductSpecification::findOrFail($bundle['product_specification_id']);
        $images = $this->productImageRepository->listByColor($spec->color_id , $spec->product_id);

        return view('site.pages.bundles.index' ,compact('bundle' , 'images'));
    }

    public function add_to_cart(Request $request , $id)
    {
        $bundle = $this->bundleRepository->showById(Bundle::findOrFail($id));
        

        $quantity = $request->quantity;
        $item = \Cart::get($id);

        try {
            if ($item != null){
                $attributes = $item['attributes'];

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
                $price = $bundle['price'];
                $id = $id;

                \Cart::add([
                    'id' => $id,
                    'name' => $bundle['name_en'],
                    'quantity' => $quantity ? $quantity : 1,
                    'price' => $price,
                    'associatedModel' => 'bundle',
                    'attributes' => [
                        'id' => $bundle['id'],
                        'image' => $bundle['image'],
                        'name_en' => $bundle['name_en'],
                        'name_ar' => $bundle['name_ar'],
                        'slug' => $bundle['slug']
                    ]
                ]);
            }
            return response()->json([
                'message' => locale() == 'en' ? 'Product added to cart successfully' : 'تم إضافه المنتج لسلة المشتريات بنجاح',
                'html' => view('site.layouts.cart')->render(),
                'counter' => \Cart::getContent()->count()
            ] ,200);
        } catch (\Throwable $th) {
            return error_response();
        }
    }
}
