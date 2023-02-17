<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    //
    protected $table = 'socialmedia';
    protected $fillable = [
        'link',
        'image',
        'image_alt',
    ];
}
