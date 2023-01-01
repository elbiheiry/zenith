<?php

namespace App\Repositories;

use App\Http\Resources\RefundResource;
use App\Models\Refund;

class RefundRepository 
{
    public $model;

    public function __construct(Refund $model)
    {
        $this->model = $model;
    }

    public function show()
    {
        $refund = $this->model->firstOrFail();

        return (new RefundResource($refund))->resolve();
    }

    public function edit($request)
    {
        $refund = $this->model->firstOrFail();
        $data = [
            'en' => [
                'description' => $request['description_en']
            ],
            'ar' => [
                'description' => $request['description_ar']
            ]
        ];

        $refund->update($data);
    }  
}