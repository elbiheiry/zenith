<?php

namespace App\Http\Resources;

use App\Traits\ImageTrait;
use Illuminate\Http\Resources\Json\JsonResource;

class AccessoryResource extends JsonResource
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
            'image_path' => $this->get_image($this->image , 'accessories'),
            'slug' => $this->slug,
            'name_en' => $this->translate('en')->name,
            'name_ar' => $this->translate('ar')->name,
            'overview_en' => $this->translate('en')->overview,
            'overview_ar' => $this->translate('ar')->overview,
            'description_en' => $this->translate('en')->description,
            'description_ar' => $this->translate('ar')->description,
            'images' => AccessoryImageResource::collection($this->images)->response()->getData(true),
            'specifications' => AccessorySpecificationResource::collection($this->specifications)->response()->getData(true),
            // 'products' => $this->when($this->products, ProductResource::collection($this->products)->response()->getData(true))
            // 'product_id' => $this->product_id
        ];
    }
}
