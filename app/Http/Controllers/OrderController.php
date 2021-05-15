<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    //
   
    
    public function store(Request $request)
   {
      
    $data = $request->validate([
        'user_id'=>'',
        'prix_total'=>'',
        'nom_client'=>'required|min:2',
        'prenom_client' => 'required|min:2',
        'Adresse_client' => 'required|min:3',
        'num_tel' => 'required|min:9|numeric',
    ]);
    //dd($request->session()->all());
     $order = new Order();
     $order->nom_client = $request->input('nom_client');
     $order->prenom_client = $request->input('prenom_client');
     $order->Adresse_client = $request->input('Adresse_client');
     $order->num_tel = $request->input('num_tel');
     $order->user_id = $request->input('user_id');
    // $order->prix_total = $request->input('prix_total'); 
     $order->admin_id = 1;
     $order->delivery_id = 1;
     $order->save();
     return redirect('/home')->back()->with('success', 'Commande tres bien enregsitre!');
  }

  public function checkout(Request $request){
    if(!$request->session()->has('cart') || empty($request->session()->get('cart'))){
        return redirect('/');
    }
    $carts = $request->session()->get('cart');
    $cart_total = 0;
    foreach ($carts['products'] as $cart){
        $cart_total += $cart['total'];
    }
    
     $order = Order::create(['user_id' => Auth::id(), 'prix_total' => $cart_total]);

    if($order){
        foreach($carts['products'] as $key => $cart){
            $order_product = $order->products()->sync([$key]);
        }
        $request->session()->forget('cart');
        return redirect()->back()->with('success', 'Product added to cart successfully!');
   }
   return redirect('/merci');
}

 
 public function cart(Request $request){
    if(!$request->session()->has('cart'))
        return redirect('/');
    $cart = $request->session()->get('cart');
    return view('panier', compact('cart'));

}

     public function User(){

   
        // Get the currently authenticated user...
        $user = Auth::user();
        
        // Get the currently authenticated user's ID...
        $id = Auth::id();
        $user_id = Auth::id();
    
        $order->user_id  = Auth::id();
        $order->save();
    
    }

    public function my_orders(){
        $orders = Order::where('user_id',Auth::user()->id)->get();
        return view('pages.mes_commande',compact('orders'));
    }
  
}
