<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AccessorySpecificationResource extends JsonResource
{
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
            'price' => $this->price,
            'sku' => $this->sku,
            'color_id' => $this->color_id,
            'color' => $this->color_id == null ? null : (new ColorResource($this->color))->resolve(),
            'locale' => $this->locale
        ];
    }
}
