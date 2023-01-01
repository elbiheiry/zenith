<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolTranslation extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'description' , 'locale' , 'school_id'];
}
