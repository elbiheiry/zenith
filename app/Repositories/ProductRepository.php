<?php

namespace App\Repositories;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Traits\ImageTrait;
use Cviebrock\EloquentSluggable\Services\SlugService;

class ProductRepository 
{
    use ImageTrait;

    public $model;

    public function __construct(Product $model)
    {
        $this->model = $model;
    }
 
    public function list($take = null): array
    {
        $objects = $this->model->all()->sortBy('id' , SORT_REGULAR)->take($take);
 
        return ProductResource::collection($objects)->response()->getData(true);
    }

    public function search($search)
    {
        $objects = $this->model->whereHas('translations' , function ($query) use ($search){
            $query->where('name' , 'like' , '%'.$search.'%');
        })->get();

        return ProductResource::collection($objects)->response()->getData(true);
    }

    public function list_by_school($schools): array
    {
        // dd($schools);
        $objects = $this->model->whereHas('schools' , function ($query) use ($schools){
            $query->whereIn('school_id' , $schools);
        })->orderBy('id' , 'desc')->get();
 
        return ProductResource::collection($objects)->response()->getData(true);
    }

    public function related($id): array
    {
        $product = $this->model->findOrFail($id);

        $objects = $this->model->all()->where('school_id' , $product->school_id)->where('id' , '!=' , $id)->sortByDesc('id')->take(6);

        return ProductResource::collection($objects)->response()->getData(true);
    }
 
    public function showById($product)
    {
        return (new ProductResource($product))->resolve();
    }

    public function showBySlug($slug)
    {
        $product = $this->model->whereSlug($slug)->firstOrFail();
        
        return (new ProductResource($product))->resolve();
    }
 
    public function create($request)
    {
        $data = [
            'en' => [
                'name' => $request['name_en'],
                'description' => $request['description_en'],
                'features' => $request['features_en'],
                'legal' => $request['legal_en'],
                'terms' => $request['terms_en']
            ],
            'ar' => [
                'name' => $request['name_ar'],
                'description' => $request['description_ar'],
                'features' => $request['features_ar'],
                'legal' => $request['legal_ar'],
                'terms' => $request['terms_ar']
            ],
            'slug' => SlugService::createSlug(Product::class , 'slug' , $request['name_en'] , ['unique' => true]),
            'image' => $this->image_manipulate($request['image'] , 'products' , 540 , 540),
            'image2' => $request['image2'] != null ? $this->image_manipulate($request['image2'] , 'products' , 540 , 540) : null
        ];
 
        $product = $this->model->create($data);

        // $product->schools()->sync($request['school_id']);

        $product->specifications()->create([
            'capacity_id' => $request['capacity_id'] == 0 ? null : $request['capacity_id'],
            'price' => $request['price'],
            'connectivity' => $request['connectivity'] == 0 ? null : $request['connectivity'],
            'sku' => $request['sku'],
            'color_id' => $request['color_id'],
            'type' => $request['type']
        ]);
    }
 
    public function edit($request , $product)
    {
        $data = [
            'en' => [
                'name' => $request['name_en'],
                'description' => $request['description_en'],
                'features' => $request['features_en'],
                'legal' => $request['legal_en'],
                'terms' => $request['terms_en']
            ],
            'ar' => [
                'name' => $request['name_ar'],
                'description' => $request['description_ar'],
                'features' => $request['features_ar'],
                'legal' => $request['legal_ar'],
                'terms' => $request['terms_ar']
            ]
        ];

        if ($product->translate('en')->name != $request['name_en']) {
            $data['slug'] = SlugService::createSlug(Product::class , 'slug' , $request['name_en'] , ['unique' => true]);
        }

        if ($request['image']) {
            $this->image_delete($product->image , 'products');
            $data['image'] = $this->image_manipulate($request['image'] , 'products' , 540 , 540);
        }
        
        if ($request['image2']) {
            $this->image_delete($product->image2 , 'products');
            $data['image2'] = $this->image_manipulate($request['image2'] , 'products' , 540 , 540);
        }
 
        $product->update($data);

        // $product->schools()->sync($request['school_id']);
    }
}