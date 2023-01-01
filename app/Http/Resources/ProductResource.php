<?php

namespace App\Http\Resources;

use App\Traits\ImageTrait;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'image' => $this->image,
            'image_path' => $this->get_image($this->image , 'products'),
            'image2' => $this->image2,
            'image2_path' => $this->get_image($this->image2 , 'products'),
            'slug' => $this->slug,
            // 'school_id' => $this->school_id,
            // 'schools' => $this->when($this->schools, SchoolResource::collection($this->schools)->response()->getData(true)),
            'name_en' => $this->translate('en')->name,
            'name_ar' => $this->translate('ar')->name,
            'description_en' => $this->translate('en')->description,
            'description_ar' => $this->translate('ar')->description,
            'features_en' => $this->translate('en')->features,
            'features_ar' => $this->translate('ar')->features,
            'legal_en' => $this->translate('en')->legal,
            'legal_ar' => $this->translate('ar')->legal,
            'terms_en' => $this->translate('en')->terms,
            'terms_ar' => $this->translate('ar')->terms,
            'images' => ProductImageResource::collection($this->images)->response()->getData(true),
            'specifications' => ProductSpecificationResource::collection($this->specifications)->response()->getData(true),
            'accessories' => $this->when($this->accessories, AccessoryResource::collection($this->accessories)->response()->getData(true))
        ];
    }
}
