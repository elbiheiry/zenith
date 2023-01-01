<?php

namespace App\Http\Resources;

use App\Traits\ImageTrait;
use Illuminate\Http\Resources\Json\JsonResource;

class AboutResource extends JsonResource
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
            'image1' => $this->image1,
            'image1_path' => $this->get_image($this->image1 , 'about'),
            'image2' => $this->image2,
            'image2_path' => $this->get_image($this->image2 , 'about'),
            'title1_en' => $this->translate('en')->title1,
            'title1_ar' => $this->translate('ar')->title1,
            'title2_en' => $this->translate('en')->title2,
            'title2_ar' => $this->translate('ar')->title2,
            'description1_en' => $this->translate('en')->description1,
            'description1_ar' => $this->translate('ar')->description1,
            'description2_en' => $this->translate('en')->description2,
            'description2_ar' => $this->translate('ar')->description2,
            'subtitle_en' => $this->translate('en')->subtitle,
            'subtitle_ar' => $this->translate('ar')->subtitle
        ];
    }
}
