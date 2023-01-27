<?php

namespace App\Repositories;

use App\Http\Resources\WorkResource;
use App\Models\Work;
use App\Traits\ImageTrait;

class WorkRepository 
{
    use ImageTrait;

    public $model;

    public function __construct(Work $model)
    {
        $this->model = $model;
    }
 
    public function list(): array
    {
        $objects = $this->model->all()->sortByDesc('id');
 
        return WorkResource::collection($objects)->response()->getData(true);
    }
 
    public function showById($id)
    {
        $work = $this->model->findOrFail($id);

        return (new WorkResource($work))->resolve();
    }
 
    public function create($data)
    {
        $data = [
            'en' => [
                'title' => $data['title_en'],
                'subtitle' => $data['subtitle_en']
            ],
            'ar' => [
                'title' => $data['title_ar'],
                'subtitle' => $data['subtitle_ar']
            ],
            'image' => $this->image_manipulate($data['image'] , 'works' , 128 , 128),
        ];
 
        $this->model->create($data);
    }
 
    public function edit($request , $id)
    {
        $work = $this->model->findOrFail($id);

        $data = [
            'en' => [
                'title' => $request['title_en'],
                'subtitle' => $request['subtitle_en']
            ],
            'ar' => [
                'title' => $request['title_ar'],
                'subtitle' => $request['subtitle_ar']
            ]
        ];

        if ($request['image']) {
            $this->image_delete($work->image , 'works');
            $data['image'] = $this->image_manipulate($request['image'] , 'works' , 128 , 128);
        }
 
        $work->update($data);
    }    
}