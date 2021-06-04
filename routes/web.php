<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Route;
// liste des tache pour sous categories
Route::get('/','HomeController@index');

Route::get('/affiche_sous_categorie','ProductsController@affichage_souscategorie')->middleware('can:admin');

Route::get('/listesouscategorie','ProductsController@liste_souscategorie')->middleware('can:admin');
   

   
Route::get('/createSous-Category', "ProductsController@add_souscategory")->middleware('can:admin');
// Les Taches de l'administrateur
//Route::middleware(['can:admin'])->prefix('admin')->group(function(){
    Route::get('/produit','ProductsController@index')->name('products')->middleware('can:admin');
    Route::get('/affiche_categorie','ProductsController@affichage_categorie')->middleware('can:admin');
    Route::get('/listecategorie','ProductsController@liste_categorie')->middleware('can:admin');
    //Ajout et lister les vendeurs
    Route::post('/create-vendeur', "ProductsController@add_vendeur")->middleware('can:admin');
    Route::get('/affiche-vendeur','ProductsController@affichage_property')->name('products')->middleware('can:admin');
    Route::get('/liste-vendeur','ProductsController@vendeur2')->name('products')->middleware('can:admin');
    // Supprimer Vendeur 
    Route::delete('/affiche-vendeur/{id}','ProductsController@destroy_vendeur')->middleware('can:admin');
    // Supprimer Category
    Route::delete('/affiche_category/{id}','ProductsController@destroy_cat')->middleware('can:admin');
    // Supprimer SousCategory
    Route::delete('/affiche_sous_category/{id}','ProductsController@destroy_souscat')->middleware('can:admin');
    /// Ajout de categories
    Route::post('/createCategory', "ProductsController@add_category")->middleware('can:admin');

    //Ajout sous category
    Route::post('/createSousCategory', "ProductsController@add_sous_category")->middleware('can:admin');
    Route::get('/products/create','ProductsController@create')->name('product_create')->middleware('can:admin');
    Route::post('/products/create','ProductsController@store')->name('store_products')->middleware('can:admin');
    //Route::post('/products/create','categoriesController@store')->name('store_products');
    Route::get('products/{id}/edit','ProductsController@edit')->name("editer_produit")->middleware('can:admin');
    Route::patch('products/{id}/edit', 'ProductsController@update1')->name('update_product')->middleware('can:admin');
    Route::get('/admin/dashbord', 'AcceuilController@dashbord')->middleware('can:admin');
    Route::delete('product/{id}','ProductsController@destroy')->middleware('can:admin');
    //Route::post('/admin/dashbord/connect', 'SessionsController@connect')->name('connect');

// les taches de user  demandant authentification

    Route::get('/finish_cart', "CartController@finish_cart")->middleware('auth');


Auth::routes();
Route::get('/', 'ProductsController@index')->name('products.index');
Route::get('/deconnect', 'HomeController@deconnect')->name('deconnect');


Route::get('/espace_client', 'HomeController@utilisateur')->name('espace_client')->middleware('auth');

Route::post('/register_user', 'UsersController@store')->name('ajouter_user');

//Route::get('/orders/description', 'ProductsController@desc');
//Route::get('/orders/achat', 'ProductsController@achat');
Route::get("/produit/{id}/show", 'ProductsController@show');
Route::get("/produit/{id}/achat", 'ProductsController@achat')->name('achat_products');
//Route::post("/produit/{id}/achat", 'OrderController@store')->name('achat_products');
Route::post('/product/add_to_cart', "AjaxController@add_to_cart")->name('add_to_cart');
Route::get('/cart', "OrderController@cart");
Route::get('/checkout', 'OrderController@checkout');
Route::get('/merci', "ProductsController@merci");
Route::get('/achat1', "ProductsController@achat1")->name('achat1_products');
Route::post('/achat1', "ProductsController@store1")->name('achat1_products');

// AFFICHER LES PRODUITS ASSOCIE AUX CATHEGORIES
Route::get('/category/{id}', "ProductsController@pagecategory")->name('produit_par_cat');


// ROUTE POUR LA BARRE DE RECHERCHE 
Route::get('/search', "ProductsController@search")->name('products.search');
//entete telephone
Route::get('/entete', "ProductsController@entete");
//ROUTE POUR LES CATEGORIES
Route::get('/Maconnerie', "HomeController@macon");
Route::get('/Sanitaire', "HomeController@sanitaire");
Route::get('/Peinture', "HomeController@peinture");
Route::get('/Electricite', "HomeController@electricite");
//ROUTE POUR LES SOUS-CATEGORIES MACONNERIE
Route::get('/maçonnerie/ciment', "HomeController@ciment");
Route::get('/maçonnerie/fer', "HomeController@fer");
Route::get('/maçonnerie/gravier', "HomeController@gravier");
//ROUTE POUR LES SOUS-CATEGORIES PEINTURE
Route::get('/peinture/pinceau', "HomeController@pinceau");
//Route::get('/fer', "HomeController@fer");
//Route::get('/gravier', "HomeController@gravier");
//ROUTE POUR LES SOUS-CATEGORIES SANITAIRE
Route::get('/plomberie/salle_bain', "HomeController@salle_bain");
Route::get('/plomberie/robineterie', "HomeController@robineterie");

//ROUTE POUR LES SOUS-CATEGORIES ELECTRICITE

Route::get('/electricite/cablage', "HomeController@cablage");
Route::get('/electricite/eclairage', "HomeController@eclairage");
Route::get('/electricite/appareillage', "HomeController@appareillage");
Route::get('/electricite/protection', "HomeController@protection");

//Route::get('/elec', "ProductsController@elec");
//Route::get('/acc', "ProductsController@acc");

// LES PAGES DE PRESENTATIONS

Route::get('/welcome','HomeController@index1');
Auth::routes(['verify' => true]);
Route::get('','HomeController@index');
Route::get('/apropos', 'HomeController@propos');
Route::get('/actu', 'HomeController@actu');
Route::get('/mention', 'HomeController@mention');
Route::get('/cgv', 'HomeController@cgv');
Route::get('/cgu-cgv', 'HomeController@cgu');
Route::get('/partenaire', 'HomeController@parte');
Route::get('/inco', 'HomeController@inco');
Route::get('/ingelec', 'HomeController@ingelec');
Route::get('/seignerie', 'HomeController@seignerie');
Route::get('/legrand', 'HomeController@legrand');
Route::get('/faqs', 'HomeController@faqs');


Route::get('/destroy_cart','CartController@destroy')->name('cart.destroy');
Route::get('/delete_product/{rowId}','CartController@remove')->name('cart.remove');

Route::post('update','CartController@update_cart')->name('update_cart');

Route::post('/ajout_panier', "CartController@store")->name('cart.store');
Route::get('/contact', [
    'uses' => 'HomeController@contact'
]);

// Post form data
Route::post('/contact', [
    'uses' => 'HomeController@CreateForm',
    'as' => 'contact.store'
]);
Route::get('/panier', "CartController@afficher_panier")->name('afficher_panier');
//  GERER LES UTILISATEURS : CREATION DE COMPTE , CONNEXION DU COMPTE CREER, LOG OUT .
//Route::get('/register', 'RegistrationController@create');
//Route::post('register', 'RegistrationController@store');
 
//Route::get('/login', 'SessionsController@create2');
//Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
Route::get('/admin', 'SessionsController@admin');

// urls paydunya
Route::post("/purchase",'FormulesController@purchase')->name("purchase");

Route::get('/success_payment/{numorder}', 'FormulesController@success_payment')->name('success_payment');
Route::get('/cancel_payment', 'FormulesController@cancel_payment')->name('cancel_payment');

// lien pour récuperation des commandes d'un client
Route::get('/my-order', 'OrderController@my_orders')->name('my_order');