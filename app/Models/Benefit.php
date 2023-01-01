<?php

namespace App\Models;

use App\Traits\ImageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Benefit extends Model implements TranslatableContract
{
    use HasFactory , Translatable , ImageTrait;

    public $translatedAttributes = ['title' , 'description'];

    protected $fillable = ['image'];

    public function delete()
    {
        $this->image_delete($this->image , 'benefits');
        return parent::delete();
    }
}
