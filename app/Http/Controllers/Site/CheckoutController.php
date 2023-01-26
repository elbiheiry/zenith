<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Mail\OrderMail;
use App\Models\{AccessorySpecification, Product , Color , Capacity , Order, ProductSpecification, Setting};
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use League\Flysystem\Adapter\Local;
use Locale;
use Octw\Aramex\Aramex;

class CheckoutController extends Controller
{
    use ImageTrait;

    public function index()
    {
        $data = Aramex::fetchCities('SA');
        $cities = $data->Cities->string;
        
        $items = \Cart::getContent();
        foreach ($items as $item) {
            if ($item->associatedModel == 'product') {
                $item['spec'] = ProductSpecification::where('sku' , $item->attributes->sku)->firstOrFail();
            }elseif ($item->associatedModel == 'accessory') {
                $item['spec'] = AccessorySpecification::where('sku' , $item->attributes->sku)->firstOrFail();
            }
        }
        
        $user = auth()->guard('site')->user();

        return view('site.pages.checkout.index' ,compact('items' , 'user' , 'cities'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all() , [
            'name' => ['required' , 'string' , 'max:255'],
            'phone' => ['required' , 'string' , 'max:255'],
            'email' => ['required' , 'string' , 'max:255' , 'email'],
            'city' => ['required' , 'string' , 'max:255'],
            'state' => ['required' , 'string' , 'max:255'],
            'address' => ['required' , 'string' , 'max:255'],
            'zip_code' => ['required' , 'numeric'],
            'terms' => ['accepted']
        ] , [
            'terms.accepted' => locale() == 'en' ? 'Please accept our terms and conditions before checkout' : 'برجاء الموافقة علي الشروط والاحكام قبل المتابعه'
        ] , [
            'name' => locale() == 'en' ? 'Full Name' : 'الإسم بالكامل',
            'phone' => locale() == 'en' ? 'Phone Number' : 'رقم الجوال',
            'email' => locale() == 'en' ? 'Email' : 'البريد الإلكتروني',
            'city' => locale() == 'en' ? 'City' : 'المدينة',
            'state' => locale() == 'en' ? 'State / Province' : 'المحافظه',
            'address' => locale() == 'en' ? 'Address' : 'العنوان',
            'terms' => Locale() == 'en' ?  'Terms and conditions' : 'الشروظ والاحكام',
            'zip_code' => 'Zip code'
        ]);

        if ($validator->fails()) {
            return failed_validation($validator->errors()->first());
        }

        try {
            $request['user_id'] = auth()->guard('site')->id();
            $request['items'] = \Cart::getContent();
            $request['total'] = \Cart::getTotal();

            $order = Order::create($request->all());
            
            $order->update([
                'order_no' => $order->id .rand(1000000,9999999)
            ]);

            $email = Setting::firstOrFail()->email; 
            $order['url'] = route('admin.orders.show' ,['order_no' => $order->order_no]);
            Mail::to($email)->send(new OrderMail($order));
            Session::put('order_id' , $order->id);
            // \Cart::clear();
            return response()->json([
                'message' => locale() == 'en' ? 'Please wait , redirecting you in seconds ..' : 'برجاء الإنتظار جاري تحويلك في خلال ثواني ..' ,
                'url' => route('site.payment.index' )
            ], 200);
        } catch (\Throwable $th) {
            // dd($th->getMessage());
            return error_response();
        }
    }
}
