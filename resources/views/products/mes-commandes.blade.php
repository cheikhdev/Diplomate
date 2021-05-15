@extends('layouts.app')
    @section('connect')
        <li><a href="#" data-toggle="modal" data-target="#myModal"> <i class="fas fa-sign-in-alt fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Inscription</a></li>
        <li><a href="login.html#"data-toggle="modal" data-target="#ModalLogin"> <i class="fas fa-user-lock fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Connexion</a></li>
    @endsection
    
  @section('content')
        <!-- Begin Page Content -->
   
        <h1>Mon Achat</h1>
                
                
                <input class="mt-3" type="text" name="nom" placeholder="Veuillez mettre votre Nom" style="width: 400px; height: 50px;"><br>
                <input class="mt-3"type="text" name="prenom" placeholder="Veuillez mettre votre Prenom" style="width: 400px;height: 50px;"><br>
                <input class="mt-3" type="text" name="email" placeholder="Veuillez mettre votre email" style="width: 400px;height: 50px;"><br>
                <input class="mt-3" type="text" name="email" placeholder="Veuillez mettre votre email" style="width: 400px;height: 50px;"><br>
                <button><a href="url('/panier')">Retour au panier</a></button>
                <button><a href="url('/confirmation')">Suivant<a></button>
                
    @endsection
 

@section('extra-js')
                   
@endsection
 