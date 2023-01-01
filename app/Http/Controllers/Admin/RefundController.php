<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RefundRequest;
use App\Repositories\RefundRepository;

class RefundController extends Controller
{
    public $refundRepository;

    public function __construct(RefundRepository $refundRepository)
    {
        $this->refundRepository = $refundRepository;
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $refund = $this->refundRepository->show();

        return view('admin.pages.refund.index' , compact('refund'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  RefundRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RefundRequest $request)
    {
        try {
            $this->refundRepository->edit($request);

            return update_response();
        } catch (\Throwable $th) {
            return error_response();
        }
    }
}
