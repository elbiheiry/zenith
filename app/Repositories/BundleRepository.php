<?php

namespace App\Repositories;

use App\Http\Resources\BundleResource;
use App\Models\Bundle;
use App\Traits\ImageTrait;
use Cviebrock\EloquentSluggable\Services\SlugService;

class BundleRepository 
{
    use ImageTrait;

    public $model;

    public function __construct(Bundle $model)
    {
        $this->model = $model;
    }
 
    public function list($take = null): array
    {
        $objects = $this->model->all()->sortBy('id' , SORT_REGULAR)->take($take);
 
        return BundleResource::collection($objects)->response()->getData(true);
    }
 
    public function showById($bundle)
    {
        return (new BundleResource($bundle))->resolve();
    }

    public function showBySlug($slug)
    {
        $bundle = $this->model->whereSlug($slug)->firstOrFail();
        
        return (new BundleResource($bundle))->resolve();
    }

    public function showBySchool($id)
    {
        $objects = $this->model->all()->where('school_id' , $id)->sortByDesc('id');
        
        return BundleResource::collection($objects)->response()->getData(true);
    }
 
    public function create($request)
    {
        $data = [
            'en' => [
                'name' => $request['name_en']
            ],
            'ar' => [
                'name' => $request['name_ar']
            ],
            'slug' => SlugService::createSlug(Bundle::class , 'slug' , $request['name_en'] , ['unique' => true]),
            'image' => $this->image_manipulate($request['image'] , 'bundles' , 960 , 520),
            'price' => $request['price'],
            'school_id' => $request['school_id'],
            'product_id' => $request['product_id'],
            'product_specification_id' => $request['product_specification_id']
        ];
 
        $this->model->create($data);
    }
 
    public function edit($request , $bundle)
    {
        $data = [
            'en' => [
                'name' => $request['name_en']
            ],
            'ar' => [
                'name' => $request['name_ar']
            ],
            'price' => $request['price'],
            'school_id' => $request['school_id'],
            'product_id' => $request['product_id'],
            'product_specification_id' => $request['product_specification_id']
        ];

        if ($bundle->translate('en')->name != $request['name_en']) {
            $data['slug'] = SlugService::createSlug(Bundle::class , 'slug' , $request['name_en'] , ['unique' => true]);
        }

        if ($request['image']) {
            $this->image_delete($bundle->image , 'bundles');
            $data['image'] = $this->image_manipulate($request['image'] , 'bundles' , 960 , 520);
        }
 
        $bundle->update($data);
    }
}