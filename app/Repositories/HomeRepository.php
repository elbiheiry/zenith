<?php

namespace App\Repositories;

use App\Http\Resources\HomeResource;
use App\Models\Home;
use App\Traits\ImageTrait;

class HomeRepository 
{
    use ImageTrait;

    public $model;

    public function __construct(Home $model)
    {
        $this->model = $model;
    }

    public function show()
    {
        $content = $this->model->firstOrFail();

        return (new HomeResource($content))->resolve();
    }

    public function edit($request)
    {
        $content = $this->model->firstOrFail();
        $data = [
            'en' => [
                'title' => $request['title_en'],
                'title1' => $request['title1_en'],
                'subtitle' => $request['subtitle_en'],
                'description1' => $request['description1_en'],
                'description2' => $request['description2_en']
            ],
            'ar' => [
                'title' => $request['title_ar'],
                'title1' => $request['title1_ar'],
                'subtitle' => $request['subtitle_ar'],
                'description1' => $request['description1_ar'],
                'description2' => $request['description2_ar']
            ],
        ];

        if ($request['image']) {
            $this->image_delete($content->image , 'home');
            $data['image'] = $this->image_manipulate($request['image'] , 'home' , 570 , 570);
        }

        $content->update($data);
    }
}