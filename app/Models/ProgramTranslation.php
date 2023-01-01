<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramTranslation extends Model
{
    use HasFactory;

    protected $fillable = ['title' , 'subtitle' , 'description' , 'description1', 'description2' , 'description3' , 'locale' , 'program_id'];
}
