<?php

namespace App\Http\Resources;

use App\Traits\ImageTrait;
use Illuminate\Http\Resources\Json\JsonResource;

class BundleResource extends JsonResource
{
    use ImageTrait;

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'image' => $this->get_image($this->image , 'bundles'),
            'school_id' => $this->school_id,
            'school' => (new SchoolResource($this->school))->resolve(),
            'product_id' => $this->product_id,
            'product' => (new ProductResource($this->product))->resolve(),
            'product_specification_id' => $this->product_specification_id,
            'product_specification' => (new ProductSpecificationResource($this->product_specification))->resolve(),
            'price' => $this->price,
            'slug' => $this->slug,
            'accessories' => BundleAccessoryResource::collection($this->accessories)->response()->getData(true),
            'name_en' => $this->translate('en')->name,
            'name_ar' => $this->translate('ar')->name
        ];
    }
}
