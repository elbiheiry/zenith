<?php

namespace App\Repositories;

use App\Http\Resources\AccessoryImageResource;
use App\Models\AccessoryImage;
use App\Traits\ImageTrait;

class AccessoryImageRepository 
{
    use ImageTrait;

    public $model;

    public function __construct(AccessoryImage $model)
    {
        $this->model = $model;
    }
 
    public function list($id): array
    {
        $objects = $this->model->all()->where('accessory_id' , $id)->sortByDesc('id');
 
        return AccessoryImageResource::collection($objects)->response()->getData(true);
    }
 
    public function showById($id)
    {
        $image = $this->model->findOrFail($id);

        return (new AccessoryImageResource($image))->resolve();
    }
 
    public function create($data , $id)
    {
        $data = [
            'accessory_id' => $id,
            'image' => $this->image_manipulate($data['image'] , 'accessories' , 540 , 540)
        ];
 
        $this->model->create($data);
    }
 
    public function edit($request , $id)
    {
        $image = $this->model->where('id' , $id)->first();

        if ($request['image']) {
            $this->image_delete($image->image , 'products');
            $data['image'] = $this->image_manipulate($request['image'] , 'accessories' , 540 , 540);
        }
 
        $image->update($data);
    }  
}