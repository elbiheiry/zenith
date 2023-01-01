<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AccessoryImageRequest;
use App\Models\AccessoryImage;
use App\Repositories\AccessoryImageRepository;
use Illuminate\Http\Request;

class AccessoryImageController extends Controller
{
    public $imageRepository;

    public function __construct(AccessoryImageRepository $imageRepository)
    {
        $this->imageRepository = $imageRepository;
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $images = $this->imageRepository->list($id);

        return view('admin.pages.accessories.images.index' , compact('images' , 'id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AccessoryImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AccessoryImageRequest $request , $id)
    {
        try {
            $this->imageRepository->create($request , $id);

            return add_response();
        } catch (\Throwable $th) {
            // dd($th->getMessage());
            return error_response();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $image = $this->imageRepository->showById($id);

        return view('admin.pages.accessories.images.edit' ,compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  AccessoryImageRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AccessoryImageRequest $request, $id)
    {
        try {
            $this->imageRepository->edit($request , $id);

            return update_response();
        } catch (\Throwable $th) {
            // dd($th->getMessage());
            return error_response();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AccessoryImage::findOrFail($id)->delete();

        return redirect()->back();
    }
}
