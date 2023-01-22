<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AramexRequest;
use App\Models\Order;
use Illuminate\Http\Request;
use Octw\Aramex\Aramex;

class AramexController extends Controller
{
    public function index($id)
    {
        // dd(time());
        $order = Order::where('order_no' , $id)->firstOrFail();

        return view('admin.pages.aramex.index' ,compact('id' , 'order'));
    }

    public function store(AramexRequest $request , $id)
    {
        $order = Order::findOrFail($id);
        
        $data = Aramex::createPickup([
    		'name' => 'Ahmed Halawa',
    		'cell_phone' => '+9660540541315',
    		'phone' => '+9660540541315',
    		'email' => 'ahalawa@zenitharabia.com',
    		'city' => 'Riyadh',
    		'country_code' => 'SA',
            'zip_code'=> $request->zip_code,
    		'line1' => $request->line1,
            'line2' => $request->line2,
    		'line3' => $request->line3,
    		'pickup_date' => strtotime($request->pickup_date),
    		'ready_time' => strtotime($request->ready_time),
    		'last_pickup_time' => strtotime($request->last_pickup_time),
    		'closing_time' => strtotime($request->closing_time),
    		'status' => 'Ready', 
    		'pickup_location' => $request->pickup_location,
    		'weight' => $request->weight,
    		'volume' => $request->volume
    	]);

        if ($data->error){
            return failed_validation($data->errors->Message);
        }else{
          $guid = $data->pickupGUID;
        }

        $callResponse = Aramex::createShipment([
            'shipper' => [
                'name' => 'Ahmed Halawa',
                'cell_phone' => '+9660540541315',
                'phone' => '+9660540541315',
                'email' => 'ahalawa@zenitharabia.com',
                'city' => 'Riyadh',
                'country_code' => 'SA',
                'zip_code'=> $request->zip_code,
                'line1' => $request->line1,
                'line2' => $request->line2,
                'line3' => $request->line3,
            ],
            'consignee' => [
                'name' => $order->name,
                'email' => $order->email,
                'phone'      => $order->phone,
                'cell_phone' => $order->phone,
                'country_code' => 'SA',
                'city' => $order->city,
                'zip_code' => $order->zip_code,
                'line1' => $order->address,
                'line2' => $order->address2 ? $order->address2 : $order->address,
                'line3' => '',
            ],
            'shipping_date_time' => strtotime($request->shipping_date_time),
            'due_date' => strtotime($request->due_date),
            'comments' => $request->comments,
            'pickup_location' => $request->pickup_location,
            'pickup_guid' => $guid,
            'weight' => $request->weight,
            'number_of_pieces' => $request->volume,
            'description' => $request->description
        ]);
        if (!empty($callResponse->error))
        {
            dd($callResponse->errors);
            // foreach ($callResponse->errors as $errorObject) {
            //   handleError($errorObject->Code, $errorObject->Message);
            // }
        }
        else {
          // extract your data here, for example
          $shipmentId = $callResponse->Shipments->ProcessedShipment->ID;
          
          $labelUrl = $callResponse->Shipments->ProcessedShipment->ShipmentLabel->LabelURL;

          dd($shipmentId , $labelUrl);
        }
    }
}
