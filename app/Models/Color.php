<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Color extends Model implements TranslatableContract
{
    use HasFactory , Translatable;

    public $translatedAttributes = ['name'];

    /**
     * return product specifications
     *
     * @return HasMany
     */
    public function specifications(): HasMany
    {
        return $this->hasMany(ProductSpecification::class);
    }
}
