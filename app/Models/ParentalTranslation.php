<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentalTranslation extends Model
{
    use HasFactory;

    // protected $table = 'parent_translations';

    protected $fillable = ['title' , 'subtitle' ,'description1' , 'description2' , 'locale' , 'parental_id'];
}
