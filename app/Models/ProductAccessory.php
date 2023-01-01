<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ProductAccessory extends Pivot
{
    use HasFactory;
    
    protected $table = 'accessory_product';

    protected $fillable = ['product_id' , 'accessory_id'];

    /**
     * return main product
     *
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * return main school
     *
     * @return BelongsTo
     */
    public function accessory(): BelongsTo
    {
        return $this->belongsTo(Accessory::class);
    }
}
