<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Paydunya\Checkout\CheckoutInvoice;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use App\Order;
use App\Payment;
use App\Product;
use Paydunya\Checkout\Store;
use Paydunya\Setup;
    Setup::setMasterKey(config('services.paydunya.master_key'));
    Setup::setPublicKey(config('services.paydunya.test_public_key'));
    Setup::setPrivateKey(config("services.paydunya.test_private_key"));
    Setup::setToken(config("services.paydunya.test_token"));
    Setup::setMode("services.paydunya.mode"); // Optionnel. Utilisez cette option pour les paiements tests.
    Store::setName(config('services.paydunya.company_name'));
class FormulesController extends Controller
{
    public function purchase(Request $request)
    { 
        
        //Creation de l'instance CheckoutInvoice() 
        $invoice = new CheckoutInvoice();
        //On définit le montant total à payer. La valeur minimale de ce montant est 200. 
        $invoice->setTotalAmount(Cart::total());
        //on ajoute le produit avec la méthode addItem // qui prend en paramètre le nom du produit la quantité, le prix unitaire et le prix total
        foreach(Cart::content() as $row) {
            $invoice->addItem($row->name, $row->qty, $row->price, $row->total);
        }
        $order = new \App\Order();
            $num_order= date('Y')."".rand(0,9999999)."_MCSN";
                do{
                    $order_numero=Order::where('num_order',$num_order)->get();
                    if(isset($order_numero->id)){
                        $num_order= date('Y')."".rand(0,9999999)."_MCSN";
                    }
                }
                while(isset($order_numero->id)); 
            $num_order = $num_order;
            $nom_client = $request->input('nom_client');
            $prenom_client = $request->input('prenom_client');
            $adresse_client = $request->input('adresse_client');
            $num_tel = $request->input('phone_client');
            $user_id = Auth::user()->id;
            $prix_total = Cart::total();
            $order = \App\Order::updateOrCreate(["num_order" => $num_order, "nom_client" => $nom_client, "prenom_client" => $prenom_client, "Adresse_client" => $adresse_client, "num_tel" => $num_tel, "user_id" => $user_id, "prix_total" => $prix_total]);

            foreach(Cart::content() as $row) {
                $prod=Product::where('name_product',$row->name)->first();
                
                $order->product()->attach($prod);
            }

        //Création des urls de succès et d'annulation 
        $invoice->setReturnUrl(route('success_payment',['numorder' => $num_order]));
        $invoice->setCancelUrl(route('cancel_payment'));
        if($invoice->create()) {//If the invoice is correctly created 
            return redirect($invoice->getInvoiceUrl());
        } else { //If invoice is not created display the error 
            echo $invoice->response_text;
        } 
    }

    public function add_order(Request $request){
        $order = new \App\Order();
            $num_order= date('Y')."".rand(0,9999999)."_MCSN";
                do{
                    $order_numero=Order::where('num_order',$num_order)->get();
                    if(isset($order_numero->id)){
                        $num_order= date('Y')."".rand(0,9999999)."_MCSN";
                    }
                }
                while(isset($order_numero->id)); 
            $num_order = $num_order;
            $nom_client = $request->input('nom_client');
            $prenom_client = $request->input('prenom_client');
            $adresse_client = $request->input('adresse_client');
            $num_tel = $request->input('phone_client');
            $user_id = Auth::user()->id;
            $prix_total = Cart::total();
            $order = \App\Order::updateOrCreate(["num_order" => $num_order, "nom_client" => $nom_client, "prenom_client" => $prenom_client, "Adresse_client" => $adresse_client, "num_tel" => $num_tel, "user_id" => $user_id, "prix_total" => $prix_total]);

            foreach(Cart::content() as $row) {
                $prod=Product::where('name_product',$row->name)->first();
                
                $order->product()->attach($prod);
            }
        return redirect();
    }

    public function cancel_payment()
    { 
        echo 'Votre achat a été annulée ';
    }

    public function success_payment($numorder)
    { 
        $commande = Order::where('num_order',$numorder)->first();
        $token = $_GET['token'];
        $invoice = new CheckoutInvoice(); 
        //dd($commande->id);
        if ($invoice->confirm($token)) {
            //we test if we have the right token before saving in the payment table
            //Sauvegarde de la commande dans la base de donnée
            
            // Sauvegarde du paiement dans la base de donnée
            $paye = Payment::where('order_number',$numorder)->first();
            $payment = new Payment();
            $payment->order_number = $numorder;
            $payment->date_payment = date("Y-m-d H:i:s");
            $payment->user_name = $invoice->getCustomerInfo('name');
            $payment->user_email = $invoice->getCustomerInfo('email');
            $payment->user_phone = $invoice->getCustomerInfo('phone');
            $payment->order_id = $commande->id;
            if (empty($paye)) {
                $payment->save();
            }
            $item_invoice=$invoice->getItems();
            $receipt_url = $invoice->getReceiptUrl();
            $panniers=Cart::content();
            Cart::destroy();
            return view("formules.success",compact('payment','receipt_url','panniers','item_invoice'));
        } 
    }
}
