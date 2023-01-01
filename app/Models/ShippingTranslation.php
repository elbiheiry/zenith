<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingTranslation extends Model
{
    use HasFactory;

    protected $fillable = ['description' , 'locale' , 'shipping_id'];
}
