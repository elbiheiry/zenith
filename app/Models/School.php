<?php

namespace App\Models;

use App\Traits\ImageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class School extends Model implements TranslatableContract
{
    use HasFactory , Translatable , Sluggable , ImageTrait;

    public $translatedAttributes = ['name' , 'description'];

    protected $fillable = [
        'logo' , 'slug' , 'email' , 'phone'
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
     * return parent school
     *
     * @return BelongsToMany
     */
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class)->using(ProductSchool::class);
    }

    /**
     * return students of the school
     *
     * @return HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function delete()
    {
        $this->image_delete($this->image , 'schools');

        return parent::delete();
    }
}
