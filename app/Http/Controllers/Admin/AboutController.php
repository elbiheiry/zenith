<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AboutRequest;
use App\Repositories\AboutRepository;

class AboutController extends Controller
{
    public $aboutRepository;

    public function __construct(AboutRepository $aboutRepository)
    {
        $this->aboutRepository = $aboutRepository;
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = $this->aboutRepository->show();

        return view('admin.pages.about.index' , compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  AboutRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AboutRequest $request)
    {
        try {
            $this->aboutRepository->edit($request);

            return update_response();
        } catch (\Throwable $th) {
            return error_response();
        }
    }
}
