<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Singlecategory extends Model
{
    public $guarded = [];
    public function Product(){
    return $this->hasMany("App\Product");
}
   public function Category(){
        return $this ->belongsTo('App\Category');
    }
}
