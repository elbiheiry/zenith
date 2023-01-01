<?php

namespace App\Repositories;

use App\Http\Resources\BundleAccessoryResource;
use App\Models\BundleAccessory;

class BundleAccessoryRepository 
{
    public $model;

    public function __construct(BundleAccessory $model)
    {
        $this->model = $model;
    }
 
    public function list($id): array
    {
        $objects = $this->model->all()->where('bundle_id' , $id);
 
        return BundleAccessoryResource::collection($objects)->response()->getData(true);
    }
 
    public function showById($id)
    {
        $specification = $this->model->findOrFail($id);

        return (new BundleAccessoryResource($specification))->resolve();
    }
 
    public function create($request , $id)
    {
        $data = [
            'bundle_id' => $id,
            'accessory_id' => $request['accessory_id'],
            'accessory_specification_id' => $request['accessory_specification_id']
        ];
 
        $this->model->create($data);
    }
 
    public function edit($request , $id)
    {
        $image = $this->model->where('id' , $id)->first();

        $data = [
            'accessory_id' => $request['accessory_id'],
            'accessory_specification_id' => $request['accessory_specification_id']
        ];

        $image->update($data);
    }
}