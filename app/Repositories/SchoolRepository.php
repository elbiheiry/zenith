<?php

namespace App\Repositories;

use App\Http\Resources\SchoolResource;
use App\Models\School;
use App\Traits\ImageTrait;
use Cviebrock\EloquentSluggable\Services\SlugService;

class SchoolRepository 
{
    use ImageTrait;

    public $model;

    public function __construct(School $model)
    {
        $this->model = $model;
    }
 
    public function list(): array
    {
        $objects = $this->model->all()->sortByDesc('id');
 
        return SchoolResource::collection($objects)->response()->getData(true);
    }
 
    public function showById($school)
    {
        return (new SchoolResource($school))->resolve();
    }
 
    public function create($data)
    {
        $data = [
            'en' => [
                'name' => $data['name_en'],
                'description' => $data['description_en']
            ],
            'ar' => [
                'name' => $data['name_ar'],
                'description' => $data['description_ar']
            ],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'slug' => SlugService::createSlug(School::class , 'slug' , $data['name_en'] , ['unique' => true]),
            'logo' => $this->image_manipulate($data['logo'] , 'schools' , 360 , 190)
        ];
 
        $this->model->create($data);
    }
 
    public function edit($request , $school)
    {
        $data = [
            'en' => [
                'name' => $request['name_en'],
                'description' => $request['description_en']
            ],
            'ar' => [
                'name' => $request['name_ar'],
                'description' => $request['description_ar']
            ],
            'phone' => $request['phone'],
            'email' => $request['email'],
        ];

        if ($school->translate('en')->name != $request['name_en']) {
            $data['slug'] = SlugService::createSlug(School::class , 'slug' , $data['name_en'] , ['unique' => true]);
        }

        if ($request['logo']) {
            $this->image_delete($school->logo , 'schools');
            $data['logo'] = $this->image_manipulate($request['logo'] , 'schools' , 360 , 190);
        }
 
        $school->update($data);
    }  
}