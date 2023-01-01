<?php

namespace App\Repositories;

use App\Http\Resources\PrivacyResource;
use App\Models\Privacy;

class PrivacyRepository 
{
    public $model;

    public function __construct(Privacy $model)
    {
        $this->model = $model;
    }

    public function show()
    {
        $privacy = $this->model->firstOrFail();

        return (new PrivacyResource($privacy))->resolve();
    }

    public function edit($request)
    {
        $privacy = $this->model->firstOrFail();
        $data = [
            'en' => [
                'description' => $request['description_en']
            ],
            'ar' => [
                'description' => $request['description_ar']
            ]
        ];

        $privacy->update($data);
    }  
}