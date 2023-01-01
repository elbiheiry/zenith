<?php

namespace App\Http\Resources;

use App\Traits\ImageTrait;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductImageResource extends JsonResource
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
            'product_id' => $this->product_id,
            'image' => $this->image,
            'image_path' => $this->get_image($this->image , 'products'),
            'color' => (new ColorResource($this->color))->resolve(),
            'color_id' => $this->color_id,
            'locale' => $this->locale
        ];
    }
}
