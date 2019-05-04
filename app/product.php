<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use SoftDeletes;
    protected $filliable = [
        'name','price','units','description','image','category_id'
    ];

    public function orders(){
        return $this->asMany(Order::class);
    }

    public function categories()
    {
        return $this->belongsTo(category::class);
    }
}
