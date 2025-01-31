<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BenefitTranslation extends Model
{
    use HasFactory;

    protected $fillable = ['title' , 'description' , 'locale' , 'benefit_id'];
}
