<?php

namespace App\Models;

use App\Traits\ImageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AccessoryImage extends Model
{
    use HasFactory , ImageTrait;

    protected $fillable = ['image' , 'accessory_id' ];

    /**
     * return parent accessory
     *
     * @return BelongsTo
     */
    public function accessory(): BelongsTo
    {
        return $this->belongsTo(Accessory::class , 'accessory_id');
    }

    public function delete()
    {
        $this->image_delete($this->image , 'accessories');

        return parent::delete();
    }
}
