<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BundleAccessoryResource extends JsonResource
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
            'bundle_id' => $this->bundle_id,
            'accessory_id' => $this->accessory_id,
            'accessory' => (new AccessoryResource($this->accessory))->resolve(),
            'accessory_specification_id' => $this->accessory_specification_id,
            'accessory_specification' => (new AccessorySpecificationResource($this->accessory_specification))->resolve(),
        ];
    }
}
