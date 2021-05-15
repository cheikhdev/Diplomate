<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $guarded = [];
    public function Delivery(){
        return $this->belongsTo("App\Delivery");
    }
     public function Administrator(){
          return $this->belongsTo("App\Administrator");
     }
     public Function product(){
         return $this->belongsToMany("App\Product");

     }
     public function payment(){
        return $this->hasMany("App\Payment");
    }
    }
