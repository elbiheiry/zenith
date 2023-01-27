<?php

namespace App\Repositories;

use App\Http\Resources\SettingResource;
use App\Models\Setting;

class SettingRepository 
{
    public $model;

    public function __construct(Setting $model)
    {
        $this->model = $model;
    }

    public function show()
    {
        $settings = $this->model->firstOrFail();

        return (new SettingResource($settings))->resolve();
    }

    public function edit($request)
    {
        $settings = $this->model->firstOrFail();
        $data = [
            'en' => [
                'address' => $request['address_en'],
                'meta_keywords' => $request['meta_keywords_en'],
                'meta_description' => $request['meta_description_en']
            ],
            'ar' => [
                'address' => $request['address_ar'],
                'meta_keywords' => $request['meta_keywords_ar'],
                'meta_description' => $request['meta_description_ar']
            ],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'facebook' => $request['facebook'],
            'twitter' => $request['twitter'],
            'linkedin' => $request['linkedin'],
            'youtube' => $request['youtube'],
            'instagram' => $request['instagram'],
            'map' => $request['map']
        ];
        $settings->update($data);
    }        
}