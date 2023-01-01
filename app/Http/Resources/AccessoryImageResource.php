<?php

namespace App\Http\Resources;

use App\Traits\ImageTrait;
use Illuminate\Http\Resources\Json\JsonResource;

class AccessoryImageResource extends JsonResource
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
            'accessory_id' => $this->accessory_id,
            'image' => $this->image,
            'image_path' => $this->get_image($this->image , 'accessories')
        ];
    }
}
