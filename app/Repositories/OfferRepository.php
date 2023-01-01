<?php

namespace App\Repositories;

use App\Http\Resources\OfferResource;
use App\Models\Offer;
use App\Traits\ImageTrait;

class OfferRepository 
{
    use ImageTrait;

    public $model;

    public function __construct(Offer $model)
    {
        $this->model = $model;
    }
 
    public function list($type): array
    {
        $objects = $this->model->all()->where('type' , $type)->sortByDesc('id');
 
        return OfferResource::collection($objects)->response()->getData(true);
    }
 
    public function showById($id)
    {
        $offer = $this->model->findOrFail($id);

        return (new OfferResource($offer))->resolve();
    }
 
    public function create($data , $type)
    {
        $data = [
            'en' => [
                'title' => $data['title_en']
            ],
            'ar' => [
                'title' => $data['title_ar']
            ],
            'image' => $this->image_manipulate($data['image'] , 'offers' , 128 , 128),
            'type' => $type
        ];
 
        $this->model->create($data);
    }
 
    public function edit($request , $id)
    {
        $offer = $this->model->findOrFail($id);

        $data = [
            'en' => [
                'title' => $request['title_en']
            ],
            'ar' => [
                'title' => $request['title_ar']
            ]
        ];

        if ($request['image']) {
            $this->image_delete($offer->image , 'offers');
            $data['image'] = $this->image_manipulate($request['image'] , 'offers' , 128 , 128);
        }
 
        $offer->update($data);
    }    
}