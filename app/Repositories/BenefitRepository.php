<?php

namespace App\Repositories;

use App\Http\Resources\BenefitResource;
use App\Models\Benefit;
use App\Traits\ImageTrait;

class BenefitRepository 
{
    use ImageTrait;

    public $model;

    public function __construct(Benefit $model)
    {
        $this->model = $model;
    }
 
    public function list(): array
    {
        $objects = $this->model->all()->sortByDesc('id');
 
        return BenefitResource::collection($objects)->response()->getData(true);
    }
 
    public function showById($benefit)
    {
        return (new BenefitResource($benefit))->resolve();
    }
 
    public function create($data)
    {
        $data = [
            'en' => [
                'title' => $data['title_en'],
                'description' => $data['description_en']
            ],
            'ar' => [
                'title' => $data['title_ar'],
                'description' => $data['description_ar']
            ],
            'image' => $this->image_manipulate($data['image'] , 'benefits' , 128 , 128)
        ];
 
        $this->model->create($data);
    }
 
    public function edit($request , $benefit)
    {
        $data = [
            'en' => [
                'title' => $request['title_en'],
                'description' => $request['description_en']
            ],
            'ar' => [
                'title' => $request['title_ar'],
                'description' => $request['description_ar']
            ],
            'phone' => $request['phone'],
            'email' => $request['email'],
        ];

        if ($request['image']) {
            $this->image_delete($benefit->image , 'benefits');
            $data['image'] = $this->image_manipulate($request['image'] , 'benefits' , 128 , 128);
        }
 
        $benefit->update($data);
    }  
}