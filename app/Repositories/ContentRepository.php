<?php

namespace App\Repositories;

use App\Http\Resources\ContentResource;
use App\Models\Content;
use App\Traits\ImageTrait;

class ContentRepository 
{
    use ImageTrait;
    public $model;

    public function __construct(Content $model)
    {
        $this->model = $model;
    }

    public function show()
    {
        $content = $this->model->firstOrFail();

        return (new ContentResource($content))->resolve();
    }

    public function edit($request)
    {
        $content = $this->model->firstOrFail();
        $data = [
            'en' => [
                'title' => $request['title_en'],
                'subtitle' => $request['subtitle_en'],
                'description' => $request['description_en']
            ],
            'ar' => [
                'title' => $request['title_ar'],
                'subtitle' => $request['subtitle_ar'],
                'description' => $request['description_ar']
            ],
        ];

        if ($request['image']) {
            $this->image_delete($content->image , 'content');
            $data['image'] = $this->image_manipulate($request['image'] , 'content' , 570 , 570);
        }

        $content->update($data);
    }
}