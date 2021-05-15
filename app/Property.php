<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //
    public $guarded = [];
    public function product(){
    return $this->hasMany("App\Product");
}

}
