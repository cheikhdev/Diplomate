@extends('layouts.app')
        @section('indice_cart')
            
            <div class="poper">
            <a href="#" class="single-icon fixed" id="shopping"><i class="fas fa-shopping-cart fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i> 
                <span class="total-count indice" id="indice_cart">{{Cart::count()}}</span>							
            </a>
        
            <!-- Shopping Item -->
            <div class="shopping-item w-auto" id="shopping-item">
                <div class="dropdown-cart-header">
                    <span id="" class="indice">{{Cart::count()}} produit(s)</span>
                    
                    <a href="/panier" class="">Afficher</a>
                    <form action="#">
                        <input type="hidden" id="indiceH" name="indice" class="indice" value="{{Cart::count()}}">
                    </form>
                </div>
                    <div class="shop" id="shop_all">
                    <ul class="shopping-list">
                        <table id="myTable" class="table" style="overflow:hidden; width:100%;">
                            <tr>
                                        <th>Nom </th>
                                        <th>Qté</th>
                                        <th>Prix</th>
                                        <th>Delete</th>
                            </tr>
                            @foreach(Cart::content() as $row)
                                    <tr> 
                                        <td class="nom"> {{$row->name}}</td>
                                        <td class="qty">  <span style="font-size: 20px;">{{$row->qty}}</span></td>
                                        <td class="prix"><span class="amount" style="font-size: 16px;">{{$row->price}} </span></td>
                                        <td class="">
                                            <form action="{{route('cart.destroy',$row->rowId)}}" method="POST" class="w-">
                                            @csrf                      
                                            @method('DELETE')
                                                <button class="bg-danger"><i class="fas fa-trash-alt w-auto"></i></a></button>
                                            </form>
                                        </td>
                                    </tr>
                                
                            @endforeach
                        </table>
                    </ul>
                    <div class="bottom">
                        <div class="total">
                            <span>Total</span>
                            <span class="total-amount">{{Cart::total()}} FCFA</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-info" href="/finish_cart" style="font-weight: bold;">Commander</a>
                    </div> 
                </div>	
                <div id="display_item"></div>
            </div>	
        <!--/ End Shopping Item -->							
        @endsection
        @section('content')
                @if (session('success'))
                    <div class="alert alert-success " role="alert" style="text-align: center;font-size: 25px;">
                        {{ session('success') }}
                    </div>
              @endif
                <section class="container d-flex justify-content-center">
                    <div class="col-5 col-md-3 m-3 text-center pt-5" style="height:150px;border:2px solid #191348;border-radius:10px;">
                        <div class="bg-white p-3" style="position:absolute;top:-25px;z-index:10;left:40%;"><i class="fas fa-home fa-lg fa-fw"></i></i></div>
                        <h5 class="mb-2" style="color:#BE1E2D;"> SIEGE SOCIAL</h5>
                    </div>
                    <div class="col-5 col-md-3 m-3 text-center pt-5" style="height:150px;border:2px solid #191348;border-radius:10px;">
                        <div class="bg-white p-3" style="position:absolute;top:-25px;z-index:10;left:40%;"><i class="fas fa-phone-alt fa-lg fa-fw"></i></div>
                        <h5 class="mb-2" style="color:#BE1E2D;">E-mail & Téléphone</h5>
                        <h6>E-mail: info@matcom.com</h6>
                        <h6>Mobile: +221 77 478 19 07</h6>
                        <h6>Fixe: +221 33 xxx xx xx</h6>
                    </div>
                    <div class="col-5 col-md-3 m-3 text-center pt-5" style="height:150px;border:2px solid #191348;
                    border-radius:10px;">
                        <div class="bg-white p-3" style="position:absolute;top:-25px;z-index:10;left:40%;"><i class="fas fa-share-alt fa-lg"></i></div>
                        <h5 class="mb-2" style="color:#BE1E2D;">Réseaux Sociaux</h5>
                        <p>
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-linkedin"></i>
                        </p>
                    </div>
                </section>
                <section class="mt-1 w-auto">  
                    <div class="espace-contact container">
                        <div class="text-center">
                            <h1 class="mt-2" style="color:#BE1E2D;"> Nous Ecrire</h1>
                            <p class="mt-2" style="color: #191348;font-weight: bold;font-size:18px;">
                                Laissez nous un   message texte pour toutes demandes ou de renseignement<br>Nous Vous recontacterons
                            </p>
                        </div>
                        <div class="w-100 container">
                            <form action="{{route('contact.store')}}" class="w-100" method="POST">
                                @csrf
                                @if($errors->any())
                                    @foreach($errors->all() as $error)
                                        <div class="alert alert-danger">{{$error}}</div>
                                    @endforeach
                                @endif
                                <div class="row m-5 d-flex justify-content-between">
                                    <input class="col-sm-12 col-md-5 form-control" type="text" name="nom" placeholder="NOM " style="height: 42px;border-radius:10px;border:2px solid #191348;">
                                    <input class="col-sm-12 col-md-5 form-control" type="text" name="prenom" placeholder=" PRENOM" style="height: 42px;border-radius:10px;border:2px solid #191348;">
                                </div>      
                                <div class="row m-5 d-flex justify-content-between">
                                    <input class="col-sm-12 col-md-5 form-control" type="text" name="email" placeholder="EMAIL" style="height: 42px;border-radius:10px;border:2px solid #191348;">
                                    <input class="col-sm-12 col-md-5 form-control" type="text" name="objet" placeholder="OBJET" style="height: 42px;border-radius:10px;border:2px solid #191348;">
                                </div>
                                <div class="row m-5">
                                    <textarea class="col-sm-12 form-control" style="height: 160px;border:2px solid #191348;border-radius:10px;" placeholder="MESSAGE." name="message"></textarea>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button class="mt-2 mb-2" style="width:40%;border-radius:25px;" type="submit">ENVOYER</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section> 
                <style>
                    @media (min-width:992px) {
                        .espace-contact{
                            width:95vw;
                            height:auto;
                        }
                    }

                    @media (min-width:1200px) {
                        .espace-contact{
                            width:80vw;
                            height:auto;
                        }
                    }
                   
                </style> 
        @endsection