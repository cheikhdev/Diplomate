<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Contact extends Model
{
    
    public $fillable = ['nom','prenom','email','objet','message'];

public function Contact(){
         return $this->belongsToMany("App\Contact");

     }
}