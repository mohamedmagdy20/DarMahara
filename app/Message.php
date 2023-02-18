<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'address',
        'service',
        'created_at',
    ];
}
