<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
class AjaxController extends Controller
{
    //
    
    public function add_to_cart(Request $request){
        //On recupere le produit dans la BD a partir de l'id qui est passe en parametre
        $product = Product::find($request->input('product_id'));
        //On s'assure qu'il y'a bien un produit qui est retourne
        if($product){
            //On enregistre la session cart dans une variable
            $cart = $request->session()->get('cart');
            //On verifie si la cle du produit est deja dans les produits dans la session avant de l'ajouter
            if(!isset($cart['products'][$product->id])){
                //On prepare comment ajouter le produit dans les sessions. Chaque produit dans la sessoin set enregistre dans une cle cart. cette cle contient un
                $cart['products'][$product->id] = ['name_product' => $product->name_product, 'prix_product' => $product->prix_product, 'quantite' => 1, "total" => $product->prix_product];
                //On ajoute la variable $cart dans les sessions
                $request->session()->put('cart',$cart);
            }
        }
        return response()->json(['success' => true,], 200);
     }
     

}
