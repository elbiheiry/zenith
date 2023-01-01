<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BenefitRequest;
use App\Models\Benefit;
use App\Repositories\BenefitRepository;

class BenefitController extends Controller
{
    public $benefitRepository;

    public function __construct(BenefitRepository $benefitRepository)
    {
        $this->benefitRepository = $benefitRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $benefits = $this->benefitRepository->list();

        return view('admin.pages.benefits.index' , compact('benefits'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  BenefitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BenefitRequest $request)
    {
        try {
            $this->benefitRepository->create($request);

            return add_response();
        } catch (\Throwable $th) {
            return error_response();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Benefit $benefit
     * @return \Illuminate\Http\Response
     */
    public function edit(Benefit $benefit)
    {
        $benefit = $this->benefitRepository->showById($benefit);

        return view('admin.pages.benefits.edit' ,compact('benefit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  BenefitRequest  $request
     * @param  Benefit $benefit
     * @return \Illuminate\Http\Response
     */
    public function update(BenefitRequest $request, Benefit $benefit)
    {
        try {
            $this->benefitRepository->edit($request , $benefit);

            return update_response();
        } catch (\Throwable $th) {
            return error_response();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Benefit $benefit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Benefit $benefit)
    {
        $benefit->delete();

        return redirect()->back();
    }
}
