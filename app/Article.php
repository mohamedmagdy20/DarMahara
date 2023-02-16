<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = [
        'id',
        'name',
        'description',
        'short_description',
        'image',
        'image_alt',
        'meta_title',
        'meta_description',
        'keywords',
        'url',
    ];
}
