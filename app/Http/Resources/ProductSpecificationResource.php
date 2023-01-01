<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductSpecificationResource extends JsonResource
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
            'connectivity' => $this->connectivity,
            'price' => $this->price,
            'sku' => $this->sku,
            'color_id' => $this->color_id,
            'color' => (new ColorResource($this->color))->resolve(),
            'capacity_id' => $this->capacity_id,
            'capacity' => $this->capacity_id ? (new CapacityResource($this->capacity))->resolve() : null,
            'type' => $this->type
        ];
    }
}
