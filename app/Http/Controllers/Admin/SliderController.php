<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SliderRequest;
use App\Models\Slider;
use App\Repositories\SliderRepository;

class SliderController extends Controller
{
    public $sliderRepository;

    public function __construct(SliderRepository $sliderRepository)
    {
        $this->sliderRepository = $sliderRepository;
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = $this->sliderRepository->list();

        return view('admin.pages.sliders.index' , compact('sliders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  SliderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
        try {
            $this->sliderRepository->create($request);

            return add_response();
        } catch (\Throwable $th) {
            // dd($th->getMessage());
            return error_response();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  slider $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        $slider = $this->sliderRepository->showById($slider);

        return view('admin.pages.sliders.edit' ,compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  SliderRequest  $request
     * @param  slider $slider
     * @return \Illuminate\Http\Response
     */
    public function update(SliderRequest $request, Slider $slider)
    {
        try {
            $this->sliderRepository->edit($request , $slider);

            return update_response();
        } catch (\Throwable $th) {
            return error_response();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();

        return redirect()->back();
    }
}
