<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','order_no' , 'phone' , 'email' , 'city' , 'state' , 'address' , 'address2' , 'items' , 'total' , 'user_id'  , 'zip_code','status' , 'payment_details'
    ];

    public function shippment()
    {
        return $this->hasOne(Shippment::class);
    }
}
