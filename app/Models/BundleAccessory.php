<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BundleAccessory extends Model
{
    use HasFactory;

    protected $fillable = ['bundle_id' , 'accessory_id' , 'accessory_specification_id'];

    public function accessory()
    {
        return $this->belongsTo(Accessory::class);
    }

    public function accessory_specification(): BelongsTo
    {
        return $this->belongsTo(AccessorySpecification::class);
    }
}
