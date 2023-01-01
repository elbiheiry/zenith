<?php

namespace App\Models;

use App\Traits\ImageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bundle extends Model implements TranslatableContract
{
    use HasFactory , Translatable , Sluggable , ImageTrait;

    public $translatedAttributes = ['name'];

    protected $fillable = [
        'slug' , 'image' , 'product_id' , 'school_id' , 'product_specification_id' , 'price'
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

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }

    public function product_specification(): BelongsTo
    {
        return $this->belongsTo(ProductSpecification::class);
    }

    public function accessories(): HasMany
    {
        return $this->hasMany(BundleAccessory::class);
    }

    public function delete()
    {
        $this->image_delete($this->image , 'bundles');
        
        return parent::delete();
    }
}
