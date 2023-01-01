<?php

namespace App\Repositories;

use App\Http\Resources\ProductImageResource;
use App\Models\Product;
use App\Models\ProductImage;
use App\Traits\ImageTrait;

class ProductImageRepository 
{
    use ImageTrait;

    public $model;

    public function __construct(ProductImage $model)
    {
        $this->model = $model;
    }
 
    public function list($id): array
    {
        $objects = $this->model->all()->where('product_id' , $id)->sortByDesc('id');
 
        return ProductImageResource::collection($objects)->response()->getData(true);
    }

    public function listByLocale($product): array
    {
        $objects = $this->model->where('product_id' , $product['id'])->where(function ($query) use ($product){
            $query->where('color_id' , $product['specifications']['data'][0]['color_id'])->orWhere('color_id' , 1);
        })->where(function ($query1) {
            $query1->where('locale' , 'general')->orWhere('locale' , locale());
        })->orderBy('id' , 'asc')->get();
 
 
        return ProductImageResource::collection($objects)->response()->getData(true);
    }
    
    public function listBySpec($id): array
    {
        $objects = $this->model->all()->where('product_id' , $id)->sortByDesc('id');
 
        return ProductImageResource::collection($objects)->response()->getData(true);
    }
 
    public function showById($id)
    {
        $image = $this->model->findOrFail($id);

        return (new ProductImageResource($image))->resolve();
    }

    public function listByColor($color , $id): array
    {   
        $objects = $this->model->where('product_id' , $id)->where(function ($query) use ($color){
            $query->where('color_id' , $color)->orWhere('color_id' , 1);
        })->where(function ($query1) {
            $query1->where('locale' , 'general')->orWhere('locale' , locale());
        })->orderBy('id' , 'asc')->get();
 
        return ProductImageResource::collection($objects)->response()->getData(true);
    }
 
    public function create($data , $id)
    {
        $data = [
            'product_id' => $id,
            'color_id' => $data['color_id'],
            'locale' => $data['locale'],
            'image' => $this->image_manipulate($data['image'] , 'products' , 540 , 540)
        ];
 
        $this->model->create($data);
    }
 
    public function edit($request , $id)
    {
        $image = $this->model->where('id' , $id)->first();

        $data = [
            'color_id' => $request['color_id'],
            'locale' => $request['locale']
        ];

        if ($request['image']) {
            $this->image_delete($image->image , 'products');
            $data['image'] = $this->image_manipulate($request['image'] , 'products' , 540 , 540);
        }
 
        $image->update($data);
    }
}