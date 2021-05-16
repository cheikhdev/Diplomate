<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;
use  Illuminate\Database\Query\Builder;
use App\Order;
use App\Category;
use App\Product;
use App\Contact;
use App\Property;
use App\Sous_Category;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    //entete
  public function entete()
    {
      return view('partials.entete');
    }
    //Barre de recherche des produits
    public function search()
    {
        request()->validate([
            'q' => 'required|min:3'
        ]);

        $q = request()->input('q');

        $produc = Product::where('name_product', 'like', "%$q%")
                ->orWhere('description_product', 'like', "%$q%")
                ->paginate(6);

        return view('products.search')->with('products', $produc);
    }
    public function contact(){
      
      return view ('partials.contact');
    }
    
    // Création de produit

 // AFFICHAGE PRODUIT PAR CATEGORIE   
public function pagecategory(){
      //$produit = Product::find($request->id)->get();
      $products = Product::all();
      $category = Category::all();
      $categories=Category::where('id' , 1)->get();
     // dd($categories);
      return view ('pages.category',compact('categories','category','products'));
    }


    public function desc(){
      //return view("/orders/description");
  
  //}
  //public function achat(){
  // return view("/orders/achat");

}
  // AFFICHAGE DES PRODUITS PAR CATHEGORIES
  //public function getCategory($category) {
     //  $singleCategory = Category::find($category);
     //  return view('pages.category', ['category' => $singleCategory]);
//}
    
    public function User(){

   
      // Get the currently authenticated user...
      $user = Auth::user();
      
      // Get the currently authenticated user's ID...
      $id = Auth::id();
      $user_id = Auth::id();
  
      $produit->user_id  = Auth::id();
      $produit->save();
  
  }
    public function index(){
      $products = Product::all();
      return view('home', compact('products'));
   }
   public function vendeur1(){
      $property = Category::orderBy('created_at')->get();
      $property = \App\Category::orderBy('created_at', 'DESC')->get();

      
      return view('products.ajou-vendeur', compact('property'));
   }
   public function vendeur2(){
      $Property = Property::all();
      $property = Property::orderBy('created_at')->get();
      $property = \App\property::orderBy('created_at', 'DESC')->get();
      $product = \App\Product::All();
      return view('products.liste-vendeur', compact('Property','property','product'));

     
   }
   public function add_vendeur(Request $request)
   {
      $property = new Property();
       $name = $request->input('name_property');
       $properties= Property::where('name_property',$name)->first();      
      if(empty($properties))
         {
            $property->name_property=$name;
            $property->save();
           
            return redirect('/affiche-vendeur')->with('success', 'Proprietaire ajoutée avec succès !!');
         }
      else{
       
         return redirect('/affiche-vendeur')->with('success', 'Proprietaire dèja ajoutée merci !!');
      }

   }
// Affichage et liste cate et sous-cate
   public function affichage_categorie(){
      $categories = Category::all();
      return view('products.afficheCategorie', compact('categories'));
   }

   public function affichage_property(){
      $properties = Property::all();
      return view('products.ajou-vendeur', compact('properties'));
   }

   public function liste_categorie(){
      $Category = Category::all();
      $category = Category::orderBy('created_at')->get();
      $category = \App\Category::orderBy('created_at', 'DESC')->get();
      $product = \App\Product::All();
      return view('products.liste_categorie', compact('category','Category','product'));
   }
   public function affichage_souscategorie(){
      $sous_categories = Sous_Category::all();
      $categories = \App\Category::pluck('name_category','id');

      return view('products.affichag_sous_cate', compact('sous_categories','categories'));
   }
   public function liste_souscategorie(){
      $sousCategory = Singlecategory::all();
      $souscategory = Singlecategory::orderBy('created_at')->get();
      $souscategory = \App\Singlecategory::orderBy('created_at', 'DESC')->get();
      $product = \App\Product::All();
      return view('products.listesouscategorie', compact('sousCategory','souscategory'));
   }
   
   public function uploadImage(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null){
      $name = !is_null($filename) ? $filename : str_random('25');
      $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);
   
      return $file;
   }   
   
   
   // creation categories
   public function create()
   {
      $categories = \App\Category::pluck('name_category','id');
      $properties = \App\Property::pluck('name_property','id');
      $sous_category = Sous_Category::pluck('name','id');
      return view('products.create', compact('categories','properties','sous_category'));
   }
   
   public function add_category(Request $request)
   {
      $category = new Category();
       $name = $request->input('name_category');
       $categories= Category::where('name_category',$name)->first();      
      if(empty($categories))
         {
            $category->name_category=strtolower($name); 
            $category->save();
            return redirect('/affiche_categorie')->with('success', 'Categorie ajoutée avec succès !!');
         }
      else{   
         return redirect('/affiche_category')->with('success', 'Categorie dèja ajoutée merci !!');
      }

   }
 // creation sous categories

   public function add_sous_category(Request $request){
      $sous_category = new Sous_Category();
       $name = $request->input('nom_sous_category');
       $sous_categories= Sous_Category::where('name',$name)->first();      
      if(empty($sous_categories))
         {
            //$category= Category::where('name_category',$request->input())
            $sous_category->name=strtolower($name);
            $sous_category->category_id=$request->input('id_category');
            $sous_category->save();
            return redirect('/affiche_sous_categorie')->with('success', 'Sous Categorie ajoutée avec succès !!');
         }
      else {
         return redirect('/affiche_sous_categorie')->with('success', 'Sous Categorie dèja ajoutée merci !!');
      }
   }

   public function store(Request $request)
   {
      $produit = new Product();
      $data = $request->validate([
         'name_product'=>'required|min:4',
         'prix_product' => 'required|min:3|numeric',
         'description_product' => 'max:1000000',
         'image_product' => 'nullable | image | mimes:jpeg,png,jpg,gif | max: 2048',
         
         
     ]);
     
     //On verfie si une image est envoyée
      /*if($request->has('image_product')){
         //On enregistre l'image dans un dossier
         $image = $request->file('image_product');
         //Nous allons definir le nom de notre image en combinant le nom du produit et un timestamp
         $image_name = Str::slug($request->input('name')).'_'.time();
         //Nous enregistrerons nos fichiers dans /uploads/images dans public
         $folder = 'uploads/product_images/';
         //Nous allons enregistrer le chemin complet de l'image dans la BDD
         $produit->image_product = $folder.$image_name.'.'.$image->getClientOriginalExtension();
         //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la methode uploadImage();
         $file = $this->uploadImage($image, $folder, 'public', $image_name);
         dd($file,$produit->image_product);
      }*/
      if($request->has('image_product')){
         //On enregistre l'image dans un dossier
         $image = $request->file('image_product');
         //Nous allons definir le nom de notre image en combinant le nom du produit et un timestamp
         $image_name = Str::slug($request->input('image_product')).'_'.time();
         //Nous enregistrerons nos fichiers dans /uploads/images dans public
         $folder = '/uploads/images/';
         //Nous allons enregistrer le chemin complet de l'image dans la BD
         $produit->image_product = $folder.$image_name.'.'.$image->getClientOriginalExtension();
         //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la methode uploadImage();
         $file = $this->uploadImage($image, $folder, 'public', $image_name);
         
     }
     $produit->name_product = $request->input('name_product');
     $produit->prix_product = $request->input('prix_product');
     $produit->description_product = $request->input('description_product');
     if (empty(Auth::user()->admin_id)) {
      $produit->admin_id=1;
     }
     else {
      $produit->admin_id = Auth::user()->admin_id;
     }
     
     $produit->sous_category_id = $request->input('sous_category_id');
     $produit->category_id = $request->input('category_id'); 
     $produit->property_id = $request->input('property_id');  
     $produit->save();
     return redirect()->back()->with('success', 'Produit ajouté...');
     
   }
   

public function edit($id)
{
   // Pour que l'admin soit le seul apte a editer 
  // $this->authorize('admin');
   // Editons les produits 
   $product = \App\Product::find($id);
   //$categories = \App\Category::pluck('name_category','id');
   return view('products.edit', compact('product'));
}
public function update1(Request $request,$id)
    {
        //
 
        $request->validate([
            'name_product'=>'required',
            'prix_product'=> 'required',
            'description_product' => 'required | max:10000',
            
        ]);
 
 
         $product = \App\Product::find($id);
       $product->name_product = $request->get('name_product');
        $product->prix_product = $request->get('prix_product');
        $product->description_product = $request->get('description_product');
        
 
        $product->update();
 
        return redirect('/produit')->with('success', 'Produit mise a jour avec succes');
    }

public function destroy($id)
{
   $product = Product::find($id);
   if($product)
       $product->delete();
   return redirect('/produit');
}
public function destroy_cat($id)
{
   $category = Category::find($id);
   if($category)
       $category->delete();
   return redirect('/affiche_categorie');
}
public function destroy_souscat($id)
{   
   $sousCategory = Sous_Category::find($id);
   if($sousCategory)
       $sousCategory->delete();
   return redirect('/affiche_sous_categorie');
}
public function destroy_vendeur($id)
{
   $property = Property::find($id);
   if($property)
       $property->delete();
   return redirect('/affiche-vendeur');
}

                 
         
public function update(Request $request, $id){
   $data = $request->validate([
      'name_product'   => 'required',
      'prix_product' => 'required | numeric',
      'description_product'=>'required',
      'image_product' => 'nullable | image | mimes:jpeg,png,jpg,gif | max:2048'
      
   ]);
   $product = Product::find($id);
   if($product){
      if($request->has('image_product')){
         //On enregistre l'image dans une variable
         $image = $request->file('image_product');
         if(file_exists(public_path().$product->images))//On verifie si le fichier existe
            Storage::delete(asset($product->images));//On le supprime alors
         //Nous enregistrerons nos fichiers dans /uploads/images dans public
         $folder = '/uploads/images/';
         $image_name = Str::slug($request->input('name')).'_'.time();
         $product->image_product = $folder.$image_name.'.'.$image->getClientOriginalExtension();
         //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la méthode uploadImage();
         $this->uploadImage($image, $folder, 'public', $image_name);
     }
     $product->name_product  = $request->input('name_product');
     $product->prix_product = $request->input('prix_product');
     $product->description_product = $request->input('description_product');
     $product->category_id = $request->input('category_id');
     $product->save();
     

 }
 return redirect()->back();
}
        
public function merci()   {
   return view("orders.merci");
}   
public function achat1()   {
   return view("orders.achat1");
}  
 public function show($id)  {
  
    $product = Product::find($id);
    $products = DB::table('products')->whereIn('id', [$id])->paginate(1);
    $property = Property::all();
    $properties = DB::table('properties')->whereIn('id', [$id]) ;
     

    //paginate(6);
     
    
   
    return view("orders.show", compact('product','products','properties','property'));
}

public function achat($id){
  
   $product = Product::find($id);
   return view("orders.achat", compact('product'));
}
public function store1(Request $request)
{
   if(!$request->session()->has('cart') || empty($request->session()->get('cart'))){
      return redirect('/');
  }
   
 $data = $request->validate([
     'nom_client'=>'required|min:2',
     'prenom_client' => 'required|min:2',
     'Adresse_client' => 'required|min:3',
     'num_tel' => 'required|min:9|numeric',
 ]);
 $carts = $request->session()->get('cart');
 $cart_total = 0;
 foreach ($carts['products'] as $cart){
   $cart_total += $cart['total'];
}
//dd($request->input('nom_client'));
$order = new Order();
$order->prix_total= $cart_total;
/*if($order){
   foreach($carts['products'] as $key => $cart){
       $order_product = $order->products()->sync([$key]);
   }
}*/
  $order->nom_client = $request->input('nom_client');
  $order->prenom_client = $request->input('prenom_client');
  $order->Adresse_client = $request->input('Adresse_client');
  $order->num_tel = $request->input('num_tel');
  $order->admin_id = 1;
  $order->delivery_id = 1;
  $order->save();
  if($order){
      foreach($carts['products'] as $key => $cart){
         $order_product = $order->products()->sync([$key]);
      }
   }
  $request->session()->forget('cart');
  return redirect('/home');
}

     // public function show($slog){
         //return  view('home',compact("slog"));
     // }
      public function agri(){
      return  view('products.Agriculture');
      }
      public function acc(){
         return  view('products.acc');
         }
      public function tele(){
         return  view('products.Telecoms');
         }
      public function sante(){
            return  view('products.Sante');
            }
      public function elec(){
               return  view('products.Electronique');
               }
      public function sport(){
                  return  view('products.Sport');
                  }
      public function backoffi(){
      return  view('backoffice.index');
                     }
}
