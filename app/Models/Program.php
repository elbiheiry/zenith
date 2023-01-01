<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Program extends Model implements TranslatableContract
{
    use HasFactory , Translatable;

    public $translatedAttributes = ['title' , 'subtitle' , 'description' , 'description1', 'description2' , 'description3'];

    protected $fillable = ['image1' , 'image2' , 'image3'];
}
