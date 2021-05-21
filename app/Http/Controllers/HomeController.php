<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Category;
use App\Contact;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }
    // Liste des Sous-Categories Maconnerie
    public function ciment(){
      $ciment = Product::where('name_product', 'like', "%ciment%")
                  
                  ->paginate(6);
      $product = \App\Product::All();
      return view('sous-categories.ciment', compact('product','ciment'));
    }
     public function fer(){
     $fer = Product::where('name_product', 'like', "%fer%")
                
                ->paginate(6);
     $product = \App\Product::All();
    return view('sous-categories.fer', compact('product','fer'));
}
public function gravier(){
     $gravier = Product::where('name_product', 'like', "%gravier%")
                
                ->paginate(6);
     $product = \App\Product::All();
    return view('sous-categories.gravier', compact('product','gravier'));
}
// Liste des Sous-Categories Peinture
     public function pinceau(){
     $pinceau = Product::where('name_product', 'like', "%pinceau%")
                
                ->paginate(6);
     $product = \App\Product::All();
    return view('sous-categories.pinceau', compact('product',''));
}
// Liste des Sous-Categories Sanitaires et Plomberies
     public function salle_bain(){
     $salle_bain = Product::where('name_product', 'like', "%salle_bain%")
                
                ->paginate(6);
     $product = \App\Product::All();
    return view('sous-categories.salle_bain', compact('product','salle_bain'));
    }
    public function robineterie(){
      $robineterie = Product::where('name_product', 'like', "%robineterie%")
                 
                 ->paginate(6);
      $product = \App\Product::All();
     return view('sous-categories.robineteri', compact('product','robineterie'));
 }
  
  // Liste des Sous-Categories Electricité
  public function eclairage(){
    $eclairage = Product::where('name_product', 'like', "%eclairage%")
               
               ->paginate(6);
    $product = \App\Product::All();
    return view('sous-categories.eclairage', compact('product','eclairage'));
  }

  // Liste des Sous-Categories Sanitaires et Plomberies
  public function cablage(){
    $cablage = Product::where('name_product', 'like', "%cablage%")
               
               ->paginate(6);
    $product = \App\Product::All();
    return view('sous-categories.cablage', compact('product','cablage'));
  }

   // Liste des Sous-Categories Sanitaires et Plomberies
  public function appareillage(){
    $appareillage = Product::where('name_product', 'like', "%appareillage%")
               
               ->paginate(6);
    $product = \App\Product::All();
   return view('sous-categories.appareillage', compact('product','appareillage'));
  }
  
  // Liste des Sous-Categories Sanitaires et Plomberies
  public function protection(){
    $protection = Product::where('name_product', 'like', "%protection%")
               
               ->paginate(6);
    $product = \App\Product::All();
    return view('sous-categories.protection', compact('product','protection'));
  }




    public function index(){
         $categories=Category::where('id' , 1)->get();
         $TotalMacon = DB::table('products')->whereIn('category_id', [1])->count();
         $TotalSanitaire_plomberie = DB::table('products')->whereIn('category_id', [2])->count();
         $TotalPeinture = DB::table('products')->whereIn('category_id', [3])->count();
         $TotalElectricite = DB::table('products')->whereIn('category_id', [4])->count();
          $produit1 = Product::orderBy('created_at')->get();
          $produit1 = \App\Product::orderBy('created_at', 'DESC')->get();
         $products = DB::table('products')->paginate(6);//paginate(6);
          $product = \App\Product::All();
        return view('home', compact('products','categories','TotalMacon','TotalSanitaire_plomberie','TotalPeinture','TotalElectricite','product','produit1'));
    }
     // page des cathegopries
    public function macon(){
        $macon = DB::table('products')->whereIn('category_id',[1])->paginate(6);
          $product = \App\Product::All();
        return view('products.Maconnerie', compact('macon','product'));
        
    }
    public function sanitaire(){
        $sanitaire = DB::table('products')->whereIn('category_id',[2])->paginate(6);
          $product = \App\Product::All();
        return view('products.Sanitaire', compact('sanitaire','product'));    
    }
    public function peinture(){
      $peinture = DB::table('products')->whereIn('category_id',[3])->paginate(6);
          $product = \App\Product::All();
      return view('products.Peinture', compact('peinture','product'));    
    }
    public function electricite(){
        $electricite = DB::table('products')->whereIn('category_id',[4])->paginate(6);
          $product = \App\Product::All();
        return view('products.Electricite', compact('electricite','product'));
        
     }

     public function utilisateur(){
         $products = Product::all()->take(15);
        return view('utilisateur', compact('products'));
     }

     public function deconnect(){
         Auth::logout();
         return redirect('/');
  }

   public function contact() {
      return view('partials.contact');
    }

    // Store Contact Form data
   public function CreateForm(Request $request) {       
   
    $produit = new Contact();
      $data = $request->validate([
         'nom'=>'required|min:4',
         'prenom' => 'required|min:3',
         'email' => 'required|email',
         'objet' => 'required|max:1000000',
         'message' => 'required|min:3|max:1000000'
         
         
     ]);       
    
     $produit->nom = $request->input('nom');
     $produit->prenom = $request->input('prenom');
     $produit->email = $request->input('email');
      $produit->objet = $request->input('objet');
       $produit->message= $request->input('message');
     $produit->save();
     return redirect()->back()->with('success', 'Votre message a ete bien enregistre');
     }
      
 

  public function actu() {
      return view('pages.actu');
    }
    public function parte() {
      return view('pages.partenaire');
    }
    public function propos() {
      return view('pages.propos');
    }
   
 // les pages de a propos
  public function cgv() {
      return view('pages.cgv');
  }
   
  public function cgu() {
    return view('pages.cgu');
  }

  public function mention() {
    return view('pages.mention');
  }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    

}