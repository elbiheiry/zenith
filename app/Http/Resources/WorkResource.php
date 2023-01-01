<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WorkResource extends JsonResource
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
            'title_en' => $this->translate('en')->title,
            'title_ar' => $this->translate('ar')->title,
            'subtitle_en' => $this->translate('en')->subtitle,
            'subtitle_ar' => $this->translate('ar')->subtitle
        ];
    }
}
