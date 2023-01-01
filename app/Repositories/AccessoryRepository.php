<?php

namespace App\Repositories;

use App\Http\Resources\AccessoryResource;
use App\Models\Accessory;
use App\Traits\ImageTrait;
use Cviebrock\EloquentSluggable\Services\SlugService;

class AccessoryRepository 
{
    use ImageTrait;

    public $model;

    public function __construct(Accessory $model)
    {
        $this->model = $model;
    }
 
    public function list($take = null): array
    {
        $objects = $this->model->all()->sortBy('id' , SORT_REGULAR)->take($take);
 
        return AccessoryResource::collection($objects)->response()->getData(true);
    }

    public function related($id): array
    {
        $accessory = $this->model->findOrFail($id);
        $product_accessories = $accessory->products()->get();
        $product_ids = [];
        foreach ($product_accessories as $item) {
            array_push($product_ids , $item['id']);
        }

        $objects = $this->model->whereHas('products' , function($product) use ($product_ids){
            $product->whereIn('product_id' ,$product_ids);
        })->where('id' , '!=' , $id)->orderBy('id' , 'desc')->take(6)->get();

        return AccessoryResource::collection($objects)->response()->getData(true);
    }
 
    public function showById($accessory)
    {
        return (new AccessoryResource($accessory))->resolve();
    }

    public function showBySlug($slug)
    {
        $accessory = $this->model->whereSlug($slug)->firstOrFail();
        
        return (new AccessoryResource($accessory))->resolve();
    }
 
    public function create($request)
    {
        $data = [
            'en' => [
                'name' => $request['name_en'],
                'overview' => $request['overview_en'],
                'description' => $request['description_en']
            ],
            'ar' => [
                'name' => $request['name_ar'],
                'overview' => $request['overview_ar'],
                'description' => $request['description_ar']
            ],
            'slug' => SlugService::createSlug(Accessory::class , 'slug' , $request['name_en'] , ['unique' => true]),
            'image' => $this->image_manipulate($request['image'] , 'accessories' , 540 , 540),
        ];
 
        $accessory = $this->model->create($data);
        $accessory->products()->sync($request['product_id']);

        $accessory->specifications()->create([
            'price' => $request['price'],
            'sku' => $request['sku'],
            'color_id' => $request['color_id'] == 0 ? null : $request['color_id'],
            'locale' => $request['locale']
        ]);
    }
 
    public function edit($request , $accessory)
    {
        $data = [
            'en' => [
                'name' => $request['name_en'],
                'overview' => $request['overview_en'],
                'description' => $request['description_en']
            ],
            'ar' => [
                'name' => $request['name_ar'],
                'overview' => $request['overview_ar'],
                'description' => $request['description_ar']
            ]
        ];

        if ($accessory->translate('en')->name != $request['name_en']) {
            $data['slug'] = SlugService::createSlug(Accessory::class , 'slug' , $request['name_en'] , ['unique' => true]);
        }

        if ($request['image']) {
            $this->image_delete($accessory->image , 'accessories');
            $data['image'] = $this->image_manipulate($request['image'] , 'accessories' , 540 , 540);
        }
 
        $accessory->update($data);

        $accessory->products()->sync($request['product_id']);
    }
}