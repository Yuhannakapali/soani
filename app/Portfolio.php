<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public $table = "portfolios";

    protected $fillable = [
        'name',
        'url',
        'image_name',
    ];
}
