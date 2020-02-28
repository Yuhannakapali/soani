<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    public $table = testimonials;

    protected $fillable = [
        'name',
        'message',
        'designation',
        'image_name',
    ];
}
