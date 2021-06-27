<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;

class AcceuilController extends Controller
{
    //
    public function index(){
        $products = Product::all()->take(15);//paginate(6);
        return view('acceuil', compact('products'));
     }
     
     public function dashbord(){
        $clients = User::where('roles','user')->get();
        return view('accueildashbord', compact('clients'));
    }

}
