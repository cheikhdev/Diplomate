<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
class CartController extends Controller
{
    //
    public function store(Request $request){

        $duplicata= Cart::search(function($cartItem, $rowId) use ($request)
        {
            return $cartItem->id = $request->id;
        });

        if($duplicata->isNotEmpty()){
            return response()->json(['success' => true,], 200);
        }
        else{
            $product = Product::find($request->product_id);
            $quantite = $request->input('quantite');
            Cart::add($product->id, $product->name_product,$quantite, $product->prix_product)
                ->associate('App\Product');
                return response()->json(['success' => true,], 200);
        }
    }  
        public function add_to_cart(Request $request){
            //On recupere le produit dans la BD a partir de l'id qui est passe en parametre
            $product = Product::find($request->input('product_id'));

            //récuperation quantité
            $quantite = $request->input('quantite');
            //On s'assure qu'il y'a bien un produit qui est retourne
            if($product){
                Cart::add($product->id, $product->name_product,$quantite, $product->prix_product )
                ->associate('App\Product');
            }
            return response()->json(['success' => true,], 200);
         }
            
    

    public function afficher_panier(Request $request){
        $product = Product::find($request->product_id);
         
        return view('panier' , compact('product'));
    }

     public function destroy(){
    
        Cart::destroy();
        return back()->with('succes' , 'Pannier vider');


     }
     public function remove($rowId)
        {
            Cart::remove($rowId);

            return back();
        }
     public function update_cart(Request $request){
         $i=0;
         while ($request->input("rowId$i")) {
            $uqty = $request->input("uqty$i");
            $rowId = $request->input("rowId$i");
    
            Cart::update($rowId, $uqty);
            $i=$i+1;
         }
        
        return response()->json(['success' => true,], 200);
    }

    public function finish_cart(){
        if (auth()->guest()) {
            return back()->with('danger' , 'Veuiller vous connecter ou créer un compte pour suivre vos achat');
        }
        else{
            return view("commande");
        }
        
    }

   

}
