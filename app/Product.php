<?php


namespace App;
use Illuminate\Database\Eloquent\Model;

class Product extends Model 
{
    //
    protected $guarded = [];
    public function Category(){
        return $this ->belongsTo('App\Category');
    }
    public function sous_category(){
        return $this ->belongsTo('App\Sous_Category');
    }
    public function Property(){
        return $this ->belongsTo('App\Property');
    }
   
    public function Administrator(){
        return $this ->belongsTo('App\Administrator');
   }
   public function Order(){
        return $this ->belongsToMany('App\Order');
   }
  

    

    public function getPrice() {
        return $this->prix_product;
    }
    
   
}
