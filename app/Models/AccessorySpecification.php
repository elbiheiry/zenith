<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AccessorySpecification extends Model
{
    use HasFactory;
    
    protected $fillable = ['sku' , 'price' , 'locale' , 'accessory_id' , 'color_id'];

    /**
     * return parent accessory
     *
     * @return BelongsTo
     */
    public function accessory(): BelongsTo
    {
        return $this->belongsTo(Accessory::class);
    }

    /**
     * return parent color
     *
     * @return BelongsTo
     */
    public function color(): BelongsTo
    {
        return $this->belongsTo(Color::class);
    }
}
