<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shippment extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id' , 'pickup_id' , 'shipmentId' , 'labelUrl'
    ];
}
