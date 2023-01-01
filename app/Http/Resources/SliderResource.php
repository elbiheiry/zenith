<?php

namespace App\Http\Resources;

use App\Traits\ImageTrait;
use Illuminate\Http\Resources\Json\JsonResource;

class SliderResource extends JsonResource
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
            'link' => $this->link,
            'image' => $this->image,
            'image_path' => $this->get_image($this->image , 'sliders'),
            'title_en' => $this->translate('en')->title,
            'title_ar' => $this->translate('ar')->title,
            'description_en' => $this->translate('en')->description,
            'description_ar' => $this->translate('ar')->description,
            'button_en' => $this->translate('en')->button,
            'button_ar' => $this->translate('ar')->button
        ];
    }
}
