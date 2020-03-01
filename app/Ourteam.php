<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ourteam extends Model
{
    public $table = "ourteams"; 

    protected $fillable = [
        'name',
        'designation',
        'image_name',
        'type',
    ];
}
