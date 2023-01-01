<?php

namespace App\Repositories;

use App\Http\Resources\CapacityResource;
use App\Models\Capacity;

class CapacityRepository 
{
   public $model;

   public function __construct(Capacity $model)
   {
        $this->model = $model;
   }

   public function list(): array
    {
        $objects = $this->model->all()->sortByDesc('id');

        return CapacityResource::collection($objects)->response()->getData(true);
    }

    public function showById($capacity)
    {
        return (new CapacityResource($capacity))->resolve();
    }

    public function showByProductId($id)
    {
        $objects = $this->model->whereHas('specifications' , function ($query) use ($id){
            $query->where('product_id' , $id);
        })->get();

        return CapacityResource::collection($objects)->response()->getData(true);
    }

    public function create($data)
    {
        $data = [
            'en' => [
                'name' => $data['name_en']
            ],
            'ar' => [
                'name' => $data['name_ar']
            ]
        ];

        $this->model->create($data);
    }

    public function edit($request , $capacity)
    {
        $data = [
            'en' => [
                'name' => $request['name_en']
            ],
            'ar' => [
                'name' => $request['name_ar']
            ],
        ];

        $capacity->update($data);
    }

}