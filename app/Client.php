<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $table = "clients"; 

    protected $fillable = [
        'name',   
        'url',   
        'image_name',      
    ];
}
