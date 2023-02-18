<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = [
        'name',
        'description',
        'short_description',
        'image',
        'image_alt',
        'meta_title',
        'meta_description',
        'keywords',
        'icon_image',
        'icon_image_alt',
        'url',
    ];
}
