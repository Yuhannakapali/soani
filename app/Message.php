<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public $table = "messages";
    protected $fillable = [
        'name',
        'phone',
        'email',
        'message',

    ];
}
