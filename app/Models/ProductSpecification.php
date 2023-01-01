<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductSpecification extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id' , 'capacity_id' , 'price' , 'connectivity' , 'sku' , 'color_id' , 'type'
    ];

    /**
     * return parent product
     *
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * return parent product
     *
     * @return BelongsTo
     */
    public function capacity(): BelongsTo
    {
        return $this->belongsTo(Capacity::class);
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
