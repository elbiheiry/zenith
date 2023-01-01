<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ShippingRequest;
use App\Repositories\ShippingRepository;

class ShippingController extends Controller
{
    public $shippingRepository;

    public function __construct(ShippingRepository $shippingRepository)
    {
        $this->shippingRepository = $shippingRepository;
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shipping = $this->shippingRepository->show();

        return view('admin.pages.shipping.index' , compact('shipping'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ShippingRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ShippingRequest $request)
    {
        try {
            $this->shippingRepository->edit($request);

            return update_response();
        } catch (\Throwable $th) {
            return error_response();
        }
    }
}
