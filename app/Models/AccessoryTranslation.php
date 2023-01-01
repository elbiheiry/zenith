<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessoryTranslation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name' , 'overview' , 'description' , 'accessory_id' , 'locale'
    ];
}
