<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Setting extends Model implements TranslatableContract
{
    use HasFactory , Translatable;

    protected $fillable = [
        'email' , 'phone' , 'facebook' , 'twitter' , 'linkedin' , 'youtube' , 'instagram' , 'map'
    ];

    public $translatedAttributes = ['address', 'meta_keywords' ,'meta_description'];
}
