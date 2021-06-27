<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

use App\Client;
use App\User;
class UsersController extends Controller implements Authenticatable,
                                                    MustVerifyEmail
{
    public function store(Request $request)
    {  
      $request->validate([
         'nom'=>'required',
         'prenom'=> 'required',
         'phone' => 'required ',
         'adresse' => 'required',
         'email' => 'required ',
         'password' => 'required ',
         
     ]);
       $client = new Client();
       $client->nom_client = $request->input('nom');
       $client->prenom_client = $request->input('prenom');
       $client->telephone_client = $request->input('phone');
       $client->adresse_client = $request->input('adresse');
       $client->save();
    ///////////////////////////////////////////////////
    /////////////////////////////////////////////////////
       $user= new User();
       $user->name= $client->prenom_client;
       $user->email = $request->input('email');
       $user->roles = "user";
       $user->client_id = $client->id;
       $user->password=Hash::make($request->input('password'));
       $user->save();
      $verif=User::find($user->id);
      //Auth::login($user);
         if($verif){
            return back()->with('success_info' , 'Compte créer avec succès, Veuiller utiliser votre login et mot de passe pour vous connecter');
         }
         else{
            return back()->with('danger_info' , 'Inscription non effectuée, verifier les informations entrées');
         }
      
    }
    }