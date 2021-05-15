<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class AcceuilController extends Controller
{
    //
    public function index(){
        $products = Product::all()->take(15);//paginate(6);
        return view('acceuil', compact('products'));
     }
     
     public function dashbord(){
        return view('accueildashbord');
    }
}
