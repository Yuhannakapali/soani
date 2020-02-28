<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function category(){
        return $this->hasOne('App\category');
    }
}
