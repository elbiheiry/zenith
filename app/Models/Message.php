<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $message
 */

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'name' , 'email' , 'phone' , 'subject' , 'message'
    ];

    public function image()
    {
        $hash = md5(strtolower(trim($this->email)));
        $image = 'http://www.gravatar.com/avatar/'.$hash;

        return $image;
    }

    public function getRouteKeyName()
    {
        return 'id';
    }
}
