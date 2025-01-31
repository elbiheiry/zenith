<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class About extends Model implements TranslatableContract
{
    use HasFactory , Translatable;

    public $translatedAttributes = [
        'title1' , 'subtitle' , 'description1' , 'title2' , 'description2'
    ];

    protected $fillable = ['image1' , 'image2'];
}
