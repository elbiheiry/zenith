<?php

namespace App\Repositories;

use App\Http\Resources\ParentResource;
use App\Models\Parental;
use App\Traits\ImageTrait;

class ParentRepository 
{
    use ImageTrait;

    public $model;

    public function __construct(Parental $model)
    {
        $this->model = $model;
    }

    public function show()
    {
        $parent = $this->model->firstOrFail();

        return (new ParentResource($parent))->resolve();
    }

    public function edit($request)
    {
        $parent = $this->model->firstOrFail();
        $data = [
            'en' => [
                'title' => $request['title_en'],
                'subtitle' => $request['subtitle_en'],
                'description1' => $request['description1_en'],
                'description2' => $request['description2_en']
            ],
            'ar' => [
                'title' => $request['title_ar'],
                'subtitle' => $request['subtitle_ar'],
                'description1' => $request['description1_ar'],
                'description2' => $request['description2_ar']
            ],
        ];

        if ($request['image1']) {
            $this->image_delete($parent->image1 , 'parent');
            $data['image1'] = $this->image_manipulate($request['image1'] , 'parent' , 570 , 570);
        }

        if ($request['image2']) {
            $this->image_delete($parent->image2 , 'parent');
            $data['image2'] = $this->image_manipulate($request['image2'] , 'parent' , 570 , 570);
        }

        $parent->update($data);
    }   
}