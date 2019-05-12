<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    protected $fillable=['addressline','city','state','zip','country','phone'];
    
}


