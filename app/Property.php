<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //
    public $guarded = [];
    public function Product(){
    return $this->hasMany("App\Product");
}

}
