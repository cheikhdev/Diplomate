@extends('layouts.app')
    @section('content')
        <!-- Begin Page Content -->
        @if (session('success'))
            <h4 style="font-size: 24px;border: 1px solid black;text-align: center;color: #FFD700">{{session('success')}}</h6>
        @endif
        <div class="">
            <div class="card   mb-4" style="width:100%;">
                <div class="card-header">
                    <h2 class="mr-3" style="">Mes commandes</h2>
                </div>
                <div class="card-body">
                    <div class="d-flex mt-3">
                        <div class="col-3 pl-0 pr-0" style="">
                            <div class="d-flex ">
                                <div class="col-5 phase-valide" id="phaseValFact1" style="">
                                </div>
                                <div class="col-2 phase-valide-border" id="phaseValBordFact">
                                    <h5  class="pt-2 pb-2" style="text-align:center;">1</h5>
                                </div>
                                <div class="col-5 phase-valide" id="phaseValFact2">

                                </div>
                            </div>
                            <h4 style="text-align:center;">Facturation</h4>
                        </div>
                        <div class="col-3 pl-0 pr-0">
                            <div class="d-flex ">
                                <div class="col-5 phase-non-valide" id="phaseValLiv1">
                                </div>
                                <div class="col-2 phase-non-valide-border" id="phaseValBordLiv">
                                    <h5  class="pt-2 pb-2" style="text-align:center;">2</h5>
                                </div>
                                <div class="col-5 phase-non-valide" id="phaseValLiv2">
                                </div>
                            </div>
                            <h4 style="text-align:center;">Livraison</h4>
                        </div>
                        <div class="col-3 pl-0 pr-0">
                            <div class="d-flex ">
                                <div class="col-5 phase-non-valide" id="phaseValComm1">
                                </div>
                                <div class="col-2 phase-non-valide-border" id="phaseValBordComm">
                                    <h5  class="pt-2 pb-2" style="text-align:center;">3</h5>
                                </div>
                                <div class="col-5 phase-non-valide" id="phaseValComm2">
                                </div>
                            </div>
                            <h4 style="text-align:center;">Commande</h4>
                        </div>
                        <div class="col-3 pl-0 pr-0">
                            <div class="d-flex ">
                                <div class="col-5 phase-non-valide" id="phaseValPaie1">
                                </div>
                                <div class="col-2 phase-non-valide-border" id="phaseValBordPaie">
                                    <h5  class="pt-2 pb-2" style="text-align:center;">4</h5>
                                </div>
                                <div class="col-5 phase-non-valide" id="phaseValPaie2">
                                </div>
                            </div>
                            <h4 style="text-align:center;">Paiement</h4>
                        </div>
                        <style>
                            @media (max-width:768px) {
                                h4{
                                    font-size:14px !important;
                                }
                            }
                            }

                            @media (min-width:992px) {
                                
                            }
                    </style>
                    </div>
                    <div class="container mt-5" id="facturation">
                        <h4 class="mb-3 details">Details de facturation</h4>
                        <form class="w-100" action="#" class="add-to-order">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12 col-md-6 mb-3">
                                    <input type="text" required=""  id="nom" style="border:1px solid  #F7941D;background:rgb(231, 225, 225);border-radius:10px;" class="form-control w-100" name="nom" value="{{Auth::user()->client->nom_client ?? "" }}" >
                                </div>
                                <div class="col-sm-12 col-md-6 mb-3">
                                    <input type="text" required="" id="prenom" style="border:1px solid  #F7941D;background:rgb(231, 225, 225);border-radius:10px;" class="form-control w-100" name="prenom"   value="{{Auth::user()->client->prenom_client?? "" }}" >
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-sm-12 col-md-6 mb-3">
                                    <input type="email" required="" id="email" style="border:1px solid  #F7941D;background:rgb(231, 225, 225);border-radius:10px;" class="form-control w-100" name="email" value="{{Auth::user()->email?? "" }}" >
                                </div>
                                <div class="col-sm-12 col-md-6 mb-3">
                                    <input type="text" required="" id="phone" style="border:1px solid  #F7941D;background:rgb(231, 225, 225);border-radius:10px;" class="form-control w-100" name="phone"  value="{{Auth::user()->client->telephone_client?? 
                                    "" }}" >
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-sm-12 col-md-10 mb-3">
                                    <input type="text" required="" id="adresse" style="border:1px solid  #F7941D;background:rgb(231, 225, 225);border-radius:10px;" class="form-control w-100" name="adresse" value="{{Auth::user()->client->adresse_client?? "" 
                                }}" >
                                </div>
                            </div>
                            <div class="" id="infoChamps">

                            </div>
                            <div class="m-2"><h6 style="color:red;">Veuiller modifier l'adresse si vous voulez l'expédier dans une autre adresse, Merci !!!</h6> </div>
                            
                        </form>
                            <div class="d-flex justify-content-between">
                                <button class="" ><a href="/panier" style="font-weight:bold;">Retour au panier</a></button>
                                <button id="suivantbtn1"  class="suivant">Suivant</button>
                            </div>
                        
                    </div>
                    
                    <div class="mt-5" id="livraison" style="display:none;">
                        <h4 class="mb-3 details">Details de la livraison</h4>
                        <div class="row mb-5">
                            <div class="col-12 " >
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-5 mt-4 d-flex justify-content-center" >Veuiller choisir une option pour la livraison </h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="#" class="mb-5" id="formLiv">
                                            <div class="mb-5 d-flex">
                                                <input type="checkbox" class=" mr-2" name="livMagazin" id="livMagazin">
                                                <h6>Retirer la commande au magazin</h6>
                                            </div>
                                            <div class="d-flex">
                                                <input type="checkbox" class=" mr-2" name="livDomicile" id="livDomicile">
                                                <h6>Livraison à l'adresse définie à l'étape Facturation</h6>
                                            </div>
                                            <div class="row" id="detailLiv" style="display:none;">
                                                <h5 class="mb-5 mt-4 d-flex justify-content-center">Info livraison</h5>
                                                <div>
                                                    <div >Nom : <h6 id="labnomL"></h6></div>
                                                    <hr>
                                                    <div >Telephone : <h6 id="labphoneL"></h6></div>
                                                    <hr>
                                                    <div >Email : <h6 id="labmailL"></h6></div>
                                                    <hr>
                                                    <div >Adresse : <h6 id="labadresseL"></h6></div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="" id="infoChamps2">

                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <button class="" id="retourfacture" style="font-weight:bold;">Retour à la facturation</button>
                                            <button id="suivantbtn2"  class="suivant">Passer la commande</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5" id="commande" style="display:none;">
                        <h4 class="mb-3 details">Details de la commande</h4>
                        <div class="row mb-5">
                            <div class="col-12 col-md-6">
                                <h5 class="mb-5 mt-4 d-flex justify-content-center">Info livraison</h5>
                                <div>
                                    <div >Nom : <h6 id="labnom"></h6></div>
                                    <hr>
                                    <div >Telephone : <h6 id="labphone"></h6></div>
                                    <hr>
                                    <div >Email : <h6 id="labmail"></h6></div>
                                    <hr>
                                    <div >Adresse : <h6 id="labadresse"></h6></div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6" >
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-5 mt-4 d-flex justify-content-center" >Votre commande</h5>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-light">
                                            <thead >
                                                <tr class="d-flex justify-content-between pl-3 pr-3">
                                                    <th><h5>Produit</h5> </th>
                                                    <th><h5>Total</h5></th>
                                                </tr>
                                            </thead>
                                            <tbody >
                                                @foreach(Cart::content() as $row)
                                                    <tr class="d-flex justify-content-between pl-2 pr-2">
                                                        <td>{{$row->name}} x {{$row->qty}}</td>
                                                        <td><h6>{{$row->total}} <span style="color:red;">Fcfa</span></h6></td>
                                                    </tr>
                                                @endforeach
                                                    <tr class="d-flex justify-content-between pl-2 pr-2">
                                                        <td><h5>Sous-total</h5></td>
                                                        <td><h6>{{Cart::total()}} <span style="color:red;">Fcfa</span></h6></td>
                                                        
                                                    </tr>
                                                    <tr class="d-flex justify-content-between pl-2 pr-2">
                                                        <td><h5>Expedition</h5></td>
                                                        <td><h6></h6></td>
                                                    </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex justify-content-between pl-3 pr-3">
                                            <h5>Total</h5>
                                            <h6>{{Cart::total()}} <span style="color:red;">Fcfa</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-around">
                            <button id="retourlivraison" class="" >Retour a la livraison</button>
                            <button id="commander" type="submit" class="">Payer </button>
                        </div>
                    </div>
                    <div class="mt-5" id="paiement" style="display:none;">
                        <h4 class="mb-3 details">Choix type de paiement</h4>
                            <div class="mb-5">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-5 mt-4 d-flex justify-content-center" >Veuiller selectionner votre type de paiement</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-5 d-flex">
                                            <input type="checkbox" class=" mr-2"  name="PaieLiv" id="PaieLiv">
                                            <h6>Payer à la livraison</h6>
                                        </div>
                                        <div class="d-flex">
                                            <input type="checkbox" class=" mr-2" name="PaieLigne" id="PaieLigne">
                                            <h6>Payer en ligne (orange money, wave, free money, dunyapay, carte ...)</h6>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div id="infoModePaie" class="mb-2">
                                        
                                        </div>
                                        <h6 class="text-center" style="color:red;font-weight:bold;"><i class="fas fa-lock m-2"></i>paimement 100% sécurisé</h6>
                                    </div>
                                </div>
                            </div>
                        <div class="d-flex justify-content-around">
                            <button id="retourlivraison" class="" >Retour á la livraison</button>
                            <button id="valider" type="submit" class="">Valider </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form action="/purchage" method="post" id="add-to-orderLigne">
            @csrf
            <input type="hidden" id="nomLigne" name="nomLigne" value="">
            <input type="hidden" id="prenomLigne" name="prenomLigne" value="">
            <input type="hidden" id="emailLigne" name="emailLigne" value="">
            <input type="hidden" id="adresseLigne" name="adresseLigne" value="">
            <input type="hidden" id="phoneLigne" name="phoneLigne" value="">
        </form>

        <form action="/add_order" method="post" id="add-to-orderMaison">
            @csrf
            <input type="hidden" id="nomMaison" name="nomMaison" value="">
            <input type="hidden" id="prenomMaison" name="prenomMaison" value="">
            <input type="hidden" id="emailMaison" name="emailMaison" value="">
            <input type="hidden" id="adresseMaison" name="adresseMaison" value="">
            <input type="hidden" id="phoneMaison" name="phoneMaison" value="">
        </form>
        
    @endsection