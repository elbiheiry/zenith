<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\{AccessorySpecification, ProductImage , Color , Capacity, ProductSpecification};
use App\Repositories\ColorRepository;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public $colorRepository;
    public function __construct(ColorRepository $colorRepository)
    {
        $this->colorRepository = $colorRepository;
    }
 
    /**
     * return cart page with it's contents
     *
     * @return Redirect
     */
    public function index()
    {
        $items = \Cart::getContent();
        
        foreach ($items as $item) {
            if ($item->associatedModel == 'product') {
                $item['spec'] = ProductSpecification::where('sku' , $item->attributes->sku)->firstOrFail();
            }elseif ($item->associatedModel == 'accessory') {
                $item['spec'] = AccessorySpecification::where('sku' , $item->attributes->sku)->firstOrFail();
            }
        }

        // dd($items);

        return view('site.pages.cart.index' ,compact('items'));
    }

    public function update_cart(Request $request)
    {
        $quantity = $request->quantity;
        // $item = \Cart::get($request->product_id);

        try {
            \Cart::update($request->product_id , [
                'quantity' => [
                    'relative' => false,
                    'value' => $quantity
                ]
            ]);
            return response()->json([
                'message' => locale() == 'en' ? 'Cart has been updated successfully' :'تم تحديث كميه المنتج في سله الشراء بنجاح',
                'html' => view('site.layouts.cart')->render(),
                'counter' => \Cart::getContent()->count(),
                'total' => number_format(\Cart::getTotal() , 2)
            ] ,200);
        } catch (\Throwable $th) {
            return error_response();
        }
    }

    /**
     * remove item from cart
     *
     * @param integer $id
     * @return Redirect
     */
    public function delete($id)
    {
        \Cart::remove($id);

        return redirect()->back();
    }
}
