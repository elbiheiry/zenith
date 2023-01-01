<?php

namespace App\Http\Resources;

use App\Traits\ImageTrait;
use Illuminate\Http\Resources\Json\JsonResource;

class ProgramResource extends JsonResource
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
            'image1_path' => $this->get_image($this->image1 , 'program'),
            'image2' => $this->image2,
            'image2_path' => $this->get_image($this->image2 , 'program'),
            'image3' => $this->image3,
            'image3_path' => $this->get_image($this->image3 , 'program'),
            'title_en' => $this->translate('en')->title,
            'title_ar' => $this->translate('ar')->title,
            'subtitle_en' => $this->translate('en')->subtitle,
            'subtitle_ar' => $this->translate('ar')->subtitle,
            'description_en' => $this->translate('en')->description,
            'description_ar' => $this->translate('ar')->description,
            'description1_en' => $this->translate('en')->description1,
            'description1_ar' => $this->translate('ar')->description1,
            'description2_en' => $this->translate('en')->description2,
            'description2_ar' => $this->translate('ar')->description2,
            'description3_en' => $this->translate('en')->description3,
            'description3_ar' => $this->translate('ar')->description3,
        ];
    }
}
