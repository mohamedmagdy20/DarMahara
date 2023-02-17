<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    //
    protected $table = 'about';
    protected $fillable = [
        'body',
        'meta_title',
        'meta_description',
        'keywords'
    ];
}
