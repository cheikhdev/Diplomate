@extends('layouts.app')
      @section('connect')
        <li><a href="#" data-toggle="modal" data-target="#myModal"> <i class="fas fa-sign-in-alt fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Inscription</a></li>
        <li><a href="login.html#"data-toggle="modal" data-target="#ModalLogin"> <i class="fas fa-user-lock fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Connexion</a></li>
      @endsection

		@section('indice_cart')
        <a href="#" class="single-icon fixed" id="shopping"><i class="fas fa-shopping-cart fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i> 
          <span class="total-count indice" id="indice_cart">{{Cart::count()}}</span>							
        </a>
                  <!-- Shopping Item -->
        <div class="shopping-item">
          <div class="dropdown-cart-header">
            <span class="indice">{{Cart::count()}} produit(s)</span>
            <a href="/panier">Afficher le panier</a>
            <form action="#">
              <input type="hidden" id="indiceH" name="indice" class="indice" value="{{Cart::count()}}">
            </form>
          </div>
          <?php
            //$indice = Cart::count();
            //dd(Cart::content());
          ?>
          <ul class="shopping-list" >
            @foreach(Cart::content() as $row)
                          <li>
                              <form action="{{route('cart.destroy',$row->rowId)}}" method="POST" class="">
                                  @csrf                      
                                  @method('DELETE')
                                  <button type="submit" class="remove text-danger  " title="Remove this item"><i class="fa fa-remove "></i></button>
                              </form>
                              <a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
                              <h4><a href="#">{{$row->name}}</a></h4>
                              <p class="quantity">(Quantité : {{$row->qty}}) ==> <span class="amount">{{$row->price}} FCFA</span></p>
                          </li>
            @endforeach
				  </ul>
          <div class="bottom">
            <div class="total">
              <span>Total</span>
              <span class="total-amount">{{Cart::total()}} FCFA</span>
            </div>
            <a href="{{('/panier')}}" class="btn animate">Voir le panier</a>
          </div>
        </div>
			<!--/ End Shopping Item -->							
		@endsection
        @section('content')
              <div class="row">
                                          <div class="col-12">
                                            <div class="owl-carousel popular-slider" style="padding:5px;">
                                              <!-- Start Single Product -->
                                              @foreach($products as $product)
                                                <div class="single-product" style="width:300px;height:300px;">
                                                  <div class="product-img">
                                                    <a href="product-details.html">
                                                      <img class="default-img" style="width:300px;height:150px;" src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="#">
                                                      <img class="hover-img" src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                      <div class="product-action">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" fas fa-eye"></i><span>Ajout et details</span></a>
                                                        <a title="Wishlist" href="#"><i class=" fas fa-heart "></i><span>{{$product->name_product}}</span></a>
                                                        <a title="Compare" href="#"><i class="fas fa-bar-chart-alt"></i><span>Ajout et details</span></a>
                                                      </div>
                                                      <div class="product-action-2">
                                                        <form action="{{route('cart.store')}}" method="POST"  class="add-to-cart">
                                                          @csrf
                                                          <input type="hidden" id="indice" name="" value="{{Cart::count()}}">
                                                          <input type="hidden" name="id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
                                                          <input type="hidden" name="product_id" value="{{$product->id}}">
                                                          <input type="hidden" name="prix_product" value="{{$product->prix_product}}">
                                                          <button type="submit" class="buy">
                                                            <i class="fas fa-shopping-cart fa-md fa-fw  text-gray-400" aria-hidden="true"></i>
                                                            Ajouter au panier
                                                          </button>
                                                        </form>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="product-content">
                                                    <h3 class="btn btn-danger" style="font-weight: bold;"><a href="product-details.html">{!! \Illuminate\Support\Str::words($product->name_product, 25,'....')  !!}</a></h3>
                                                    <h3><a href="product-details.html">{!! \Illuminate\Support\Str::words($product->description_product, 25,'....')  !!}</a></h3>
                                                    <div class="product-price">
                                                      <span style="color:red">{{$product->prix_product}} FCFA</span>
                                                    </div>
                                                  </div>
                                                </div>
                                              @endforeach
                                              <!-- End Single Product -->
                                            </div>
                                          </div>
                  
              </div>
                
              <a class="btn btn-warning" href="{{('home')}}"><i class="fas fa-shopping-cart"></i><span style="color: white;font-size: 15px;">VERS L'ACCUEIL</span></a>
        @endsection