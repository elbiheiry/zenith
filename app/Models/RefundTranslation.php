<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefundTranslation extends Model
{
    use HasFactory;

    protected $fillable = ['description' , 'locale' , 'refund_id'];
}
