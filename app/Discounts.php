<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discounts extends Model
{
    //
    protected $table = 'discount';
    protected $fillable = [
        'body'
    ];
}
