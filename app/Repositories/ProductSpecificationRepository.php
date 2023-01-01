<?php

namespace App\Repositories;

use App\Http\Resources\CapacityResource;
use App\Http\Resources\ProductSpecificationResource;
use App\Models\ProductSpecification;

class ProductSpecificationRepository 
{
    public $model;

    public function __construct(ProductSpecification $model)
    {
        $this->model = $model;
    }
 
    public function list($id): array
    {
        $objects = $this->model->all()->where('product_id' , $id);
 
        return ProductSpecificationResource::collection($objects)->response()->getData(true);
    }
 
    public function showById($id)
    {
        $specification = $this->model->findOrFail($id);

        return (new ProductSpecificationResource($specification))->resolve();
    }

    // public function connectivites($capacityId , $productId)
    // {
    //     $objects = $this->model->whereHas('specifications' , function ($query) use ($productId , $connectivity){
    //         $query->where('product_id' , $productId);
    //         $query->where('connectivity' , $connectivity);
    //     })->get();

    //     return CapacityResource::collection($objects)->response()->getData(true);
    // }
 
    public function create($request , $id)
    {
        $data = [
            'product_id' => $id,
            'capacity_id' => $request['capacity_id'] == 0 ? null : $request['capacity_id'],
            'price' => $request['price'],
            'connectivity' => $request['connectivity'] == 0 ? null : $request['connectivity'],
            'sku' => $request['sku'],
            'color_id' => $request['color_id'],
            'type' => $request['type']
        ];
 
        $this->model->create($data);
    }
 
    public function edit($request , $id)
    {
        $image = $this->model->where('id' , $id)->first();

        $data = [
            'capacity_id' => $request['capacity_id'] == 0 ? null : $request['capacity_id'],
            'price' => $request['price'],
            'connectivity' => $request['connectivity'] == 0 ? null : $request['connectivity'],
            'sku' => $request['sku'],
            'color_id' => $request['color_id'],
            'type' => $request['type']
        ];

        $image->update($data);
    }
}