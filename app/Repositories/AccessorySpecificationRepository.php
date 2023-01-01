<?php

namespace App\Repositories;

use App\Http\Resources\AccessorySpecificationResource;
use App\Models\AccessorySpecification;

class AccessorySpecificationRepository 
{
    public $model;

    public function __construct(AccessorySpecification $model)
    {
        $this->model = $model;
    }
 
    public function list($id): array
    {
        $objects = $this->model->all()->where('accessory_id' , $id);
 
        return AccessorySpecificationResource::collection($objects)->response()->getData(true);
    }
 
    public function showById($id)
    {
        $specification = $this->model->findOrFail($id);

        return (new AccessorySpecificationResource($specification))->resolve();
    }
 
    public function create($request , $id)
    {
        $data = [
            'accessory_id' => $id,
            'price' => $request['price'],
            'sku' => $request['sku'],
            'color_id' => $request['color_id'] == 0 ? null : $request['color_id'],
            'locale' => $request['locale']
        ];
 
        $this->model->create($data);
    }
 
    public function edit($request , $id)
    {
        $image = $this->model->where('id' , $id)->first();

        $data = [
            'price' => $request['price'],
            'sku' => $request['sku'],
            'color_id' => $request['color_id'] == 0 ? null : $request['color_id'],
            'locale' => $request['locale']
        ];

        $image->update($data);
    }
}