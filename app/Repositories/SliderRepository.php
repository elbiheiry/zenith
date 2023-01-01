<?php

namespace App\Repositories;

use App\Http\Resources\SliderResource;
use App\Models\Slider;
use App\Traits\ImageTrait;

class SliderRepository 
{
    use ImageTrait;

    public $model;

    public function __construct(Slider $model)
    {
        $this->model = $model;
    }
 
    public function list(): array
    {
        $objects = $this->model->all()->sortByDesc('id');
 
        return SliderResource::collection($objects)->response()->getData(true);
    }
 
    public function showById($school)
    {
        return (new SliderResource($school))->resolve();
    }
 
    public function create($data)
    {
        $data = [
            'en' => [
                'title' => $data['title_en'],
                'description' => $data['description_en'],
                'button' => $data['button_en']
            ],
            'ar' => [
                'title' => $data['title_ar'],
                'description' => $data['description_ar'],
                'button' => $data['button_ar']
            ],
            'link' => $data['link'],
            'image' => $this->image_manipulate($data['image'] , 'sliders' , 1920 , 960)
        ];
 
        $this->model->create($data);
    }
 
    public function edit($request , $slider)
    {
        $data = [
            'en' => [
                'title' => $request['title_en'],
                'description' => $request['description_en'],
                'button' => $request['button_en']
            ],
            'ar' => [
                'title' => $request['title_ar'],
                'description' => $request['description_ar'],
                'button' => $request['button_ar']
            ],
            'link' => $request['link']
        ];

        if ($request['image']) {
            $this->image_delete($slider->image , 'sliders');
            $data['image'] = $this->image_manipulate($request['image'] , 'sliders' , 1920 , 960);
        }
 
        $slider->update($data);
    }  
}