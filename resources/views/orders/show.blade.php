@extends('layouts.app')
      @section('connect')
        <li><a href="#" data-toggle="modal" data-target="#myModal"> <i class="fas fa-sign-in-alt fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Inscription</a></li>
        <li><a href="login.html#"data-toggle="modal" data-target="#ModalLogin"> <i class="fas fa-user-lock fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Connexion</a></li>
      @endsection

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
           <a href="{{('/panier')}}" class="btn btn-info animate"><span style="color: black;">Voir le panier<i class="fas fa-arrow-circle-right"></i></span></a>
          </div> 
        </div>  
        <div id="display_item"></div>
      </div>  
    <!--/ End Shopping Item -->             
    @endsection
    @section('content')
      <div class="card-header">
                    <h2 class="mr-3" style="text-align: center;color:#191348; ">Description générale du produit</h2>
      </div>
      
        <section class="container" style="height:auto">
          <div class="row h-auto my-5">
              <div class="col-sm-12 col-md-6">

                  <img class="img-fluid rounded " src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="" style="height:100% !important;width:80%">
              </div>
              <div class="col-sm-12 col-md-6" style="height:auto "> 
                  <div class="h-100 show-info" >
                    <div class="" >
                      <h6 class="">  <span class="" style="font-weight: bold;">{{$product->Category->name_category ?? ""}}/{{$product->sous_category->name ?? ""}}<span>
                      </h6>
                    </div>
                    <div style="margin-top:-5px im !important;">
                      <h4 class="" >{{$product->name_product}}</h4>
                    </div>
                    <div>
                      <h5 style="color:red;">{{$product->prix_product}} FCFA</h5>
                    </div>
                    <div>
                      <p >Vendu par : <span style="color:red;">{{$product->Property->name_property}}</span></p>
                    </div>
                    <div>
                      <h6 class="price with-discount mb-2">Description du produit : </h6>
                      <p>{{$product->description_product}}</p>
                    </div>
                    <div class="" style="">
                      <form action="#" id="{{'product_'.$product->id}}" class="add-to-cart " style="position: center;">
                        @csrf
                          <input type="hidden" id="indice" name="product_id" value="{{Cart::count()}}">
                          <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
                          <input type="hidden" name="product_id" value="{{$product->id}}">
                          <input type="hidden" name="prix_product" value="{{$product->prix_product}}">
                          <div class="d-flex justify-content-around">
                            <input type="number" step="1" min="1" value="1" class="mr-3" name="quantite" style="width:50px;">
                            <button type="submit" class="w-100">
                              <i class="fas fa-shopping-cart fa-md fa-fw  text-gray-400" aria-hidden="true"></i>
                                  Acheter Le Produit
                            </button> 
                          </div>     
                      </form>
                    </div>
                  </div>  
              </div>
          </div>
        </section>
        <style>
          
        </style>
    @endsection