<?php

namespace App\Http\Resources;

use App\Traits\ImageTrait;
use Illuminate\Http\Resources\Json\JsonResource;

class HomeResource extends JsonResource
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
            'image_path' => $this->get_image($this->image , 'home'),
            'title_en' => $this->translate('en')->title,
            'title_ar' => $this->translate('ar')->title,
            'subtitle_en' => $this->translate('en')->subtitle,
            'subtitle_ar' => $this->translate('ar')->subtitle,
            'description1_en' => $this->translate('en')->description1,
            'description1_ar' => $this->translate('ar')->description1,
            'title1_en' => $this->translate('en')->title1,
            'title1_ar' => $this->translate('ar')->title1,
            'description2_en' => $this->translate('en')->description2,
            'description2_ar' => $this->translate('ar')->description2
        ];
    }
}
