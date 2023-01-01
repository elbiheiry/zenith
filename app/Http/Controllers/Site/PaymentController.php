<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\AccessorySpecification;
use App\Models\Order;
use App\Models\ProductSpecification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use MyFatoorah\Library\PaymentMyfatoorahApiV2;

class PaymentController extends Controller
{
    public $mfObj;

//-----------------------------------------------------------------------------------------------------------------------------------------

    /**
     * create MyFatoorah object
     */
    public function __construct() {
        $this->mfObj = new PaymentMyfatoorahApiV2(config('myfatoorah.api_key'), config('myfatoorah.country_iso'), config('myfatoorah.test_mode'));
    }

    /**
     * Create MyFatoorah invoice
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        try {
            $paymentMethodId = 0; // 0 for MyFatoorah invoice or 1 for Knet in test mode

            $curlData = $this->getPayLoadData();
            
            $data     = $this->mfObj->getInvoiceURL($curlData, $paymentMethodId);
            
            $response = ['IsSuccess' => 'true', 'Message' => 'Invoice created successfully.', 'Data' => $data];
            return redirect($data['invoiceURL']);
        } catch (\Exception $e) {
            $response = ['IsSuccess' => 'false', 'Message' => $e->getMessage()];
            return response()->json($response);
        }
        
    }

//-----------------------------------------------------------------------------------------------------------------------------------------

    /**
     * 
     * @param int|string $orderId
     * @return array
     */
    private function getPayLoadData($orderId = null) {
        $callbackURL = route('site.payment.callback');
        $order = Order::findOrFail(Session::get('order_id'));

        return [
            'CustomerName'       => $order->name,
            'InvoiceValue'       => $order->total,
            'DisplayCurrencyIso' => 'SAR',
            'CustomerEmail'      => $order->email,
            'CallBackUrl'        => $callbackURL,
            'ErrorUrl'           => $callbackURL,
            'MobileCountryCode'  => '+965',
            'CustomerMobile'     => $order->phone,
            'Language'           => locale(),
            'CustomerReference'  => Session::get('order_id'),
            'SourceInfo'         => 'Laravel ' . app()::VERSION . ' - MyFatoorah Package ' . MYFATOORAH_LARAVEL_PACKAGE_VERSION
        ];
    }

//-----------------------------------------------------------------------------------------------------------------------------------------

    /**
     * Get MyFatoorah payment information
     * 
     * @return \Illuminate\Http\Response
     */
    public function callback() {
        try {
            $paymentId = request('paymentId');
            $data      = $this->mfObj->getPaymentStatus($paymentId, 'PaymentId');
            $order = Order::findOrFail(Session::get('order_id'));
            
            if ($data->InvoiceStatus == 'Paid') {
                $msg = locale() == 'en' ? 'Invoice is paid.' : 'تم الدفع بنجاح';
                $type = 'success';
                
                $order->update([
                    'status' => 'Done',
                    'payment_details' => json_encode($data)
                ]);
                \Cart::clear();
            } else if ($data->InvoiceStatus == 'Failed') {
                
                $msg = locale() == 'en' ? 'Error while paying , please try again ' : 'حدث خطأ أثناء الدفع برجاء المحاولة لاحقا';
                $type = 'danger';
                $order->update([    
                    'payment_details' => json_encode($data)
                ]);

            } else if ($data->InvoiceStatus == 'Expired') {
                $msg = locale() == 'en' ? 'Invoice is expired.' : 'عملية الدفع منتهية الصلاحية';
                $type = 'danger';
                $order->update([    
                    'payment_details' => json_encode($data)
                ]);
            }

            $response = ['IsSuccess' => 'true', 'Message' => $msg, 'Data' => $data];
            
        } catch (\Exception $e) {
            $response = ['IsSuccess' => 'false', 'Message' => $e->getMessage()];
            // return response()->json($response);
        }
        return redirect()->route('site.index')->with('msg' , $msg)->with('type' , $type);
    }
}
