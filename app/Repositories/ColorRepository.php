<?php

namespace App\Repositories;

use App\Http\Resources\ColorResource;
use App\Models\Color;

class ColorRepository 
{
    public $model;

    public function __construct(Color $model)
    {
        $this->model = $model;
    }
 
    public function list(): array
    {
        $objects = $this->model->all()->sortByDesc('id');
 
        return ColorResource::collection($objects)->response()->getData(true);
    }
    
    public function listExcept(): array
    {
        $objects = $this->model->all()->except(1)->sortByDesc('id');
 
        return ColorResource::collection($objects)->response()->getData(true);
    }

    public function list_by_product_id($id): array
    {
        $objects = $this->model->whereHas('specifications' , function ($query) use ($id)
        {
            $query->where('product_id' , $id);
        })->orWhere('id' , 1)->get();
 
        return ColorResource::collection($objects)->response()->getData(true);
    }
 
    public function showById($color)
    {
        return (new ColorResource($color))->resolve();
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
 
    public function edit($request , $color)
    {   
        $data = [
            'en' => [
                'name' => $request['name_en']
            ],
            'ar' => [
                'name' => $request['name_ar']
            ],
        ];
 
        $color->update($data);
    }
}