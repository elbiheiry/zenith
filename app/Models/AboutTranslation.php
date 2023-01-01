<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutTranslation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title1' , 'subtitle' , 'description1' , 'title2' , 'description2' , 'locale' , 'about_id'
    ];
}
