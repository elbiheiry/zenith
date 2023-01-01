<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\OfferRequest;
use App\Models\Offer;
use App\Repositories\OfferRepository;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public $offerRepository;

    public function __construct(
        OfferRepository $offerRepository
    ){
        $this->offerRepository = $offerRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type)
    {
        $offers = $this->offerRepository->list($type);

        return view('admin.pages.offers.index' ,compact('offers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  OfferRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OfferRequest $request , $type)
    {
        try {
            $this->offerRepository->create($request , $type);

            return add_response();
        } catch (\Throwable $th) {
            return error_response();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offer = $this->offerRepository->showById($id);

        return view('admin.pages.offers.edit' ,compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  OfferRequest  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(OfferRequest $request, $id)
    {
        try {
            $this->offerRepository->edit($request , $id);

            return update_response();
        } catch (\Throwable $th) {
            return error_response();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Offer::findOrFail($id)->delete();

        return redirect()->back();
    }
}
