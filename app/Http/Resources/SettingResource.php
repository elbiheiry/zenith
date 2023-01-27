<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SettingResource extends JsonResource
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
            'email' => $this->email,
            'phone' => $this->phone,
            'facebook' => $this->facebook,
            'twitter' => $this->twitter,
            'linkedin' => $this->linkedin,
            'youtube' => $this->youtube,
            'instagram' => $this->instagram,
            'map' => $this->map,
            'address_en' => $this->translate('en')->address,
            'address_ar' => $this->translate('ar')->address,
            'meta_keywords_en' => $this->translate('en')->meta_keywords,
            'meta_keywords_ar' => $this->translate('ar')->meta_keywords,
            'meta_description_en' => $this->translate('en')->meta_description,
            'meta_description_ar' => $this->translate('ar')->meta_description,
        ];
    }
}
