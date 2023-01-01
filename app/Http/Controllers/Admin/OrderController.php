<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Capacity;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all()->sortByDesc('id');

        return view('admin.pages.orders.index' ,compact('orders'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($order_no)
    {
        $order = Order::where('order_no' , $order_no)->firstOrFail();
        $items = json_decode($order->items);

        return view('admin.pages.orders.show' ,compact('order' , 'items'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::findOrFail($id)->delete();

        return redirect()->route('admin.orders.index');
    }
}
