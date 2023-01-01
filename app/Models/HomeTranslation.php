<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeTranslation extends Model
{
    use HasFactory;

    protected $fillable = ['title' , 'subtitle' ,'description1' ,'title1' , 'description2' , 'locale' , 'home_id'];
}
