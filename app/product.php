<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class product extends Model
{
   //use SoftDeletes;
   /*  protected $guarded = [
        'name','price','units','description','category_id','image'
    ]; */

    protected $fillable= ['name','description','size','price','image'];
    /* ,'description','size','category_id','image' */
              
  /*   public function orders(){
        return $this->asMany(Order::class);
    } */

    public function categories()
    {
        return $this->belongsTo(category::class);
        //$this->belongsTo('App\category');

    }
}
