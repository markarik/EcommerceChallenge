<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use SoftDeletes;
    protected $filliable = [
        'name','price','units','description','image'
    ];

    public function orders(){
        return $this->asMany(Order::class);
    }
}
