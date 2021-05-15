<?php


namespace App;
use Illuminate\Database\Eloquent\Model;

class Product extends Model 
{
    //
    protected $guarded = [];
    public function category(){
        return $this ->belongsTo('App\Category');
    }
    public function sous_category(){
        return $this ->belongsTo('App\Sous_Category');
    }
    public function property(){
        return $this ->belongsTo('App\Property');
    }
   
    public function administrator(){
        return $this ->belongsTo('App\Administrator');
   }
   public function order(){
        return $this ->belongsToMany('App\Order');
   }
  

    

    public function getPrice() {
        return $this->prix_product;
    }
    
   
}
