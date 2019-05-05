<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $filliable=['name'];
    public function products(){

        return $this->hasMany('App\product');
       //return $this->hasMany(product::class);
    }
}
