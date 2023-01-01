<?php

namespace App\Http\Resources;

use App\Traits\ImageTrait;
use Illuminate\Http\Resources\Json\JsonResource;

class SchoolResource extends JsonResource
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
            'name_en' => $this->translate('en')->name,
            'name_ar' => $this->translate('ar')->name,
            'description_en' => $this->translate('en')->description,
            'description_ar' => $this->translate('ar')->description,
            'slug' => $this->slug,
            'image' => $this->logo,
            'image_path' => $this->get_image($this->logo , 'schools'),
            'email' => $this->email,
            'phone' => $this->phone,
        ];
    }
}
