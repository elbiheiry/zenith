<?php

namespace App\Repositories;

use App\Http\Resources\AboutResource;
use App\Models\About;
use App\Traits\ImageTrait;

class AboutRepository 
{
    use ImageTrait;

    public $model;

    public function __construct(About $model)
    {
        $this->model = $model;
    }

    public function show()
    {
        $about = $this->model->firstOrFail();

        return (new AboutResource($about))->resolve();
    }

    public function edit($request)
    {
        $about = $this->model->firstOrFail();
        $data = [
            'en' => [
                'title1' => $request['title1_en'],
                'title2' => $request['title2_en'],
                'subtitle' => $request['subtitle_en'],
                'description1' => $request['description1_en'],
                'description2' => $request['description2_en']
            ],
            'ar' => [
                'title1' => $request['title1_ar'],
                'title2' => $request['title2_ar'],
                'subtitle' => $request['subtitle_ar'],
                'description1' => $request['description1_ar'],
                'description2' => $request['description2_ar']
            ],
        ];

        if ($request['image1']) {
            $this->image_delete($about->image1 , 'about');
            $data['image1'] = $this->image_manipulate($request['image1'] , 'about' , 570 , 570);
        }

        if ($request['image2']) {
            $this->image_delete($about->image2 , 'about');
            $data['image2'] = $this->image_manipulate($request['image2'] , 'about' , 570 , 570);
        }

        $about->update($data);
    }     
}