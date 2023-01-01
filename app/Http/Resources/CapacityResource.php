<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CapacityResource extends JsonResource
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
            'name_en' => $this->translate('en')->name,
            'name_ar' => $this->translate('ar')->name
        ];
    }
}
