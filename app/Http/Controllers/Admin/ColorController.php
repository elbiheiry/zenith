<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ColorRequest;
use App\Models\Color;
use App\Repositories\ColorRepository;

class ColorController extends Controller
{
    public $colorRepository;

    public function __construct(ColorRepository $colorRepository)
    {
        $this->colorRepository = $colorRepository;
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colors = $this->colorRepository->listExcept();

        return view('admin.pages.colors.index' , compact('colors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ColorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ColorRequest $request)
    {
        try {
            $this->colorRepository->create($request);

            return add_response();
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return error_response();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Color $color
     * @return \Illuminate\Http\Response
     */
    public function edit(Color $color)
    {
        $color = $this->colorRepository->showById($color);

        return view('admin.pages.colors.edit' ,compact('color'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ColorRequest  $request
     * @param  Color $color
     * @return \Illuminate\Http\Response
     */
    public function update(ColorRequest $request, Color $color)
    {
        try {
            $this->colorRepository->edit($request , $color);

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
    public function destroy(Color $color)
    {
        $color->delete();

        return redirect()->back();
    }
}
