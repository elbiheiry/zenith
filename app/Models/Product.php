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

class Product extends Model implements TranslatableContract
{
    use HasFactory , Translatable , Sluggable , ImageTrait;

    public $translatedAttributes = ['name' , 'description' , 'features' ,'legal' , 'terms'];

    protected $fillable = [
        'image' ,'image2' , 'slug'
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
     * returen product capacity
     *
     * @return BelongsTo
     */
    public function capacity(): BelongsTo
    {
        return $this->belongsTo(Capacity::class);
    }

    /**
     * return product images
     *
     * @return HasMany
     */
    public function images(): HasMany
    {
        return $this->hasMany(ProductImage::class);
    }

    /**
     * return parent school
     *
     * @return BelongsToMany
     */
    public function schools(): BelongsToMany
    {
        return $this->belongsToMany(School::class)->using(ProductSchool::class);
    }

    /**
     * return parent school
     *
     * @return BelongsToMany
     */
    public function accessories(): BelongsToMany
    {
        return $this->belongsToMany(Accessory::class)->using(ProductAccessory::class);
    }

    /**
     * return product specifications
     *
     * @return HasMany
     */
    public function specifications(): HasMany
    {
        return $this->hasMany(ProductSpecification::class);
    }

    // /**
    //  * return product accessories
    //  *
    //  * @return HasMany
    //  */
    // public function accessories(): HasMany
    // {
    //     return $this->hasMany(Accessory::class , 'product_id');
    // }

    public function delete()
    {
        $this->image_delete($this->image , 'products');
        $this->image_delete($this->image2 , 'products');

        foreach ($this->images() as $image) {
            $this->image_delete($image , 'products');
        }

        return parent::delete();
    }
    
}
