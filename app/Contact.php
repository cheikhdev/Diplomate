<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Contact extends Model
{
    
    public $fillable = ['nom','prenom','email','objet','message'];

public function contact(){
         return $this->belongsToMany("App\Contact");

     }
}