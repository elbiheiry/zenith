<?php

namespace App\Models;

use App\Traits\ImageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Accessory extends Model implements TranslatableContract
{
    use HasFactory , Translatable , Sluggable , ImageTrait;

    public $translatedAttributes = ['name', 'description' , 'overview'];

    protected $fillable = [
        'slug' , 'image' , 'product_id'
    ];

    /**
     * create slug input 
     *
     * @return response
     */
    public function sluggable() :Array
    {
        return [
            'slug' => [
                'source' => 'name_en'
            ]
        ];
    }

    /**
     * return accessory images
     *
     * @return HasMany
     */
    public function images(): HasMany
    {
        return $this->hasMany(AccessoryImage::class);
    }

    /**
     * return accessory specifications
     *
     * @return HasMany
     */
    public function specifications(): HasMany
    {
        return $this->hasMany(AccessorySpecification::class);
    }

    /**
     * return parent products
     *
     * @return BelongsToMany
     */
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class)->using(ProductAccessory::class);
    }

    public function delete()
    {
        $this->image_delete($this->image , 'accessories');

        foreach ($this->images() as $image) {
            $this->image_delete($image , 'accessories');
        }

        return parent::delete();
    }
}
