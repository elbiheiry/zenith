<?php

namespace App\Repositories;

use App\Http\Resources\ShippingResource;
use App\Models\Shipping;

class ShippingRepository 
{
    public $model;

    public function __construct(Shipping $model)
    {
        $this->model = $model;
    }

    public function show()
    {
        $shipping = $this->model->firstOrFail();

        return (new ShippingResource($shipping))->resolve();
    }

    public function edit($request)
    {
        $shipping = $this->model->firstOrFail();
        $data = [
            'en' => [
                'description' => $request['description_en']
            ],
            'ar' => [
                'description' => $request['description_ar']
            ]
        ];

        $shipping->update($data);
    }  
}