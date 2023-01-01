<?php

namespace App\Repositories;

use App\Http\Resources\ProgramResource;
use App\Models\Program;
use App\Traits\ImageTrait;

class ProgramRespository 
{
    use ImageTrait;

    public $model;

    public function __construct(Program $model)
    {
        $this->model = $model;
    }

    public function show()
    {
        $program = $this->model->firstOrFail();

        return (new ProgramResource($program))->resolve();
    }

    public function edit($request)
    {
        $program = $this->model->firstOrFail();
        $data = [
            'en' => [
                'title' => $request['title_en'],
                'subtitle' => $request['subtitle_en'],
                'description' => $request['description_en'],
                'description1' => $request['description1_en'],
                'description2' => $request['description2_en'],
                'description3' => $request['description3_en'],
            ],
            'ar' => [
                'title' => $request['title_ar'],
                'subtitle' => $request['subtitle_ar'],
                'description' => $request['description_ar'],
                'description1' => $request['description1_ar'],
                'description2' => $request['description2_ar'],
                'description3' => $request['description3_ar'],
            ]
        ];

        if ($request['image1']) {
            $this->image_delete($program->image1 , 'program');
            $data['image1'] = $this->image_manipulate($request['image1'] , 'program' , 570 , 570);
        }

        if ($request['image2']) {
            $this->image_delete($program->image2 , 'program');
            $data['image2'] = $this->image_manipulate($request['image2'] , 'program' , 570 , 570);
        }

        if ($request['image3']) {
            $this->image_delete($program->image3 , 'program');
            $data['image3'] = $this->image_manipulate($request['image3'] , 'program' , 570 , 570);
        }

        $program->update($data);
    }   
}