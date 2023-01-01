<?php

namespace App\Models;

use App\Traits\ImageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductImage extends Model
{
    use HasFactory , ImageTrait;

    protected $fillable = ['image' , 'product_id' , 'color_id' , 'locale'];

    /**
     * return parent product
     *
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class , 'product_id');
    }

    /**
     * return parent color
     *
     * @return BelongsTo
     */
    public function color(): BelongsTo
    {
        return $this->belongsTo(Color::class , 'color_id');
    }

    public function delete()
    {
        $this->image_delete($this->image , 'products');

        return parent::delete();
    }
}
