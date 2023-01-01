<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductImageRequest;
use App\Models\ProductImage;
use App\Repositories\{ColorRepository , ProductImageRepository};

class ProductImageController extends Controller
{
    public $imageRepository , $colorRepository;

    public function __construct(ProductImageRepository $imageRepository , ColorRepository $colorRepository)
    {
        $this->imageRepository = $imageRepository;
        $this->colorRepository = $colorRepository;
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $images = $this->imageRepository->list($id);
        $colors = $this->colorRepository->list_by_product_id($id);

        return view('admin.pages.products.images.index' , compact('images' , 'id' , 'colors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ProductImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductImageRequest $request , $id)
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
        $colors = $this->colorRepository->list_by_product_id($image['product_id']);

        return view('admin.pages.products.images.edit' ,compact('image' , 'colors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProductImageRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductImageRequest $request, $id)
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
        ProductImage::findOrFail($id)->delete();

        return redirect()->back();
    }
}
