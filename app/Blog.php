<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{   
    public $table = "blogs"; 
    protected $fillable = [
        'title',   
        'body',   
        'image_name',   
        'Author',   
        'tags',   
        'category_id',   
    ];
    public function category(){
        return $this->hasOne('App\Category');
    }
}
