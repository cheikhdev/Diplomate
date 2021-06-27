<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    //
    public function product(){
       return $this ->hasMany("App\Product");
    }
    public function order(){
        return $this ->hasMany("App\Order");
    }
    public function user(){
        return $this ->hasMany("App\User");
    }
}
