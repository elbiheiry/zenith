<?php

namespace App\Repositories;

use App\Http\Resources\TermResource;
use App\Models\Term;

class TermRepository 
{
    public $model;

    public function __construct(Term $model)
    {
        $this->model = $model;
    }

    public function show()
    {
        $term = $this->model->firstOrFail();

        return (new TermResource($term))->resolve();
    }

    public function edit($request)
    {
        $term = $this->model->firstOrFail();
        $data = [
            'en' => [
                'description' => $request['description_en']
            ],
            'ar' => [
                'description' => $request['description_ar']
            ]
        ];

        $term->update($data);
    }  
}