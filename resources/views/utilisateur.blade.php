@extends('layouts.app')
	@section('connect')
		<li><a href="#"><i class="fas fa-medkit fa-lg fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Mon compte <i class="fas fa-angle-down"></i></a>
            <ul class="dropdown">
            	<li><a href="shop-grid.html">Profil</a></li>
                <li><a href="cart.html">Parametres</a></li>
                <li><a href="/">Deconnexion</a></li>                
            </ul>
    	</li>
	@endsection
	
	@section('indice_cart')
			<a href="#" class="single-icon" id="shopping"><i class="fas fa-shopping-cart fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i> 
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
                            <p class="quantity">(Quantité : {{$row->qty}}) -- <span class="amount">{{$row->price}} FCFA</span></p>
                        </li>
					@endforeach
				</ul>
				<div class="bottom">
					<div class="total">
						<span>Total</span>
						<span class="total-amount">{{Cart::total()}} FCFA</span>
					</div>
					<a href="checkout.html" class="btn animate">Vider le panier</a>
				</div>
			</div>
			<!--/ End Shopping Item -->							
		@endsection

      @section('slide')
     
		<!-- Slider Area -->
        <section class="hero-slider" style="margin-left:300px;margin-right:100px; margin-top:25px;padding:5px;">
        <!-- Single Slider -->
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="second-slide animated zoomInDown d-none d-md-block" src="{{asset('images/materiel3.jpg')}}" style="height:65vh; width:100%;" alt="">
                    <div class="container">
                      <div class="carousel-caption d-none d-md-block">
                        <h1 class="animated fadeInDown" style="color: #ffffff;">Poduits de La marque Inco.</h1>
                        <p class="animated fadeInRight" style="color: #ffffff;">Retrouvez d'excellent produit de la marque Inco , ches nos magasins .</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="second-slide animated zoomInDown d-none d-md-block" src="{{asset('images/materiel2.jpg')}}" style="height:65vh; width:100%;" alt="">
                    <div class="container">
                      <div class="carousel-caption d-none d-md-block">
                        <h1 class="animated fadeInDown" style="color: #ffffff;">Poduits de La marque Inco.</h1>
                        <p class="animated fadeInRight" style="color: #ffffff;">Retrouvez d'excellent produit de la marque Inco , ches nos magasins .</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="second-slide animated zoomInDown d-none d-md-block" src="{{asset('images/construction-material.jpeg')}}" alt="" style="height:65vh; width:100%;">
                    <div class="container">
                      <div class="carousel-caption d-none d-md-block">
                        <h1 class="animated fadeInDown" style="color: #ffffff;">Poduits de La marque Inco.</h1>
                        <p class="animated fadeInRight" style="color: #ffffff;">Retrouvez d'excellent produit de la marque Inco , ches nos magasins .</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="second-slide animated zoomInDown d-none d-md-block" src="{{asset('images/courant.jpg')}}" alt="" style="height:65vh; width:100%;">
                    <div class="container">
                      <div class="carousel-caption d-none d-md-block">
                        <h1 class="animated fadeInDown" style="color: #ffffff;">Poduits de La marque Inco.</h1>
                        <p class="animated fadeInRight" style="color: #ffffff;">Retrouvez d'excellent produit de la marque Inco , ches nos magasins .</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="second-slide animated zoomInDown" src="{{asset('images/equipemen_macon.jpg')}}" alt="" style="height:65vh; width:100%;">
                    <div class="container">
                      <div class="carousel-caption d-none d-md-block">
                        <h1 class="animated fadeInDown" style="color: #ffffff;">Poduits de La marque Inco.</h1>
                        <p class="animated fadeInRight" style="color: #ffffff;">Retrouvez d'excellent produit de la marque Inco , ches nos magasins .</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                      </div>
                    </div>
                  </div>
                </div>
                  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
              </div>
			<!--/ End Single Slider -->
          </section>
        <!--/ End Slider Area -->
		@endsection
		
		@section('content')
            <div class="row"style="margin:20px; width: 100%; height: auto;">
             	<!-- Start Shop Home List  -->
				<section class="shop-home-list section">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-6 col-12">
								<div class="row">
									<div class="col-12">
										<div class="shop-section-title">
											<h1>Nouveaux produits</h1>
										</div>
									</div>
								</div>
								<!-- Start Single List  -->
								@foreach($products as $product)
									<div class="single-list">
										<div class="row">
											<div class="col-lg-6 col-md-6 col-12">
												<div class="list-image overlay">
													<img src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="#">
													<form action="#" id="{{'product_'.$product->id}}" class="add-to-cart">
														@csrf
														<input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
														<input type="hidden" id="indice" name="product_id" value="{{Cart::count()}}">
														<input type="hidden" name="product_id" value="{{$product->id}}">
														<input type="hidden" name="prix_product" value="{{$product->prix_product}}">
														<button type="submit" class="buy" id="panier-form">
															<i class="fas fa-shopping-cart fa-md fa-fw  text-gray-400" aria-hidden="true"></i>
														</button>
													</form>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-12 no-padding">
												<div class="content">
													<h4 class="title"><a href="#">{{$product->name_product}}</a></h4>
													<p class="price with-discount mb-2">{{$product->prix_product}} FCFA</p>
													<form action="#" id="{{'product_'.$product->id}}" class="add-to-cart">
														@csrf
														<input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
														<input type="hidden" id="indice" name="product_id" value="{{Cart::count()}}">
														<input type="hidden" name="product_id" value="{{$product->id}}">
														<input type="hidden" name="prix_product" value="{{$product->prix_product}}">
														<button type="submit" class="">
															<i class="fas fa-shopping-cart fa-md fa-fw  text-gray-400" aria-hidden="true"></i>
															Acheter
														</button>
													</form>	
												</div>
											</div>
										</div>
									</div>
								@endforeach
								<!-- End Single List  -->
							</div>
							<div class="col-lg-4 col-md-6 col-12">
								<div class="row">
									<div class="col-12">
										<div class="shop-section-title">
											<h1>Meilleur vente</h1>
										</div>
									</div>
								</div>
								<!-- Start Single List  -->
								@foreach($products as $product)
									<div class="single-list">
										<div class="row">
											<div class="col-lg-6 col-md-6 col-12">
												<div class="list-image overlay">
													<img src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="#">
													<form action="#" id="{{'product_'.$product->id}}" class="add-to-cart">
														@csrf
														<input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
														<input type="hidden" id="indice" name="product_id" value="{{Cart::count()}}">
														<input type="hidden" name="product_id" value="{{$product->id}}">
														<input type="hidden" name="prix_product" value="{{$product->prix_product}}">
														<button type="submit" class="buy" id="panier-form">
															<i class="fas fa-shopping-cart fa-md fa-fw  text-gray-400" aria-hidden="true"></i>
														</button>
													</form>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-12 no-padding">
												<div class="content">
													<h4 class="title"><a href="#">{{$product->name_product}}</a></h4>
													<p class="price with-discount mb-2">{{$product->prix_product}} FCFA</p>
													<form action="#" id="{{'product_'.$product->id}}" class="add-to-cart">
														@csrf
														<input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
														<input type="hidden" name="product_id" value="{{$product->id}}">
														<input type="hidden" id="indice" name="product_id" value="{{Cart::count()}}">
														<input type="hidden" name="prix_product" value="{{$product->prix_product}}">
														<button type="submit" class="">
															<i class="fas fa-shopping-cart fa-md fa-fw  text-gray-400" aria-hidden="true"></i>
															Acheter
														</button>
													</form>	
												</div>
											</div>
										</div>
									</div>
								@endforeach
								<!-- End Single List  -->
							</div>
							<div class="col-lg-4 col-md-6 col-12">
								<div class="row">
									<div class="col-12">
										<div class="shop-section-title">
											<h1>Les plus Visité</h1>
										</div>
									</div>
								</div>
								<!-- Start Single List  -->
								@foreach($products as $product)
									<div class="single-list">
										<div class="row">
											<div class="col-lg-6 col-md-6 col-12">
												<div class="list-image overlay">
													<img src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="#">
													<form action="#" id="{{'product_'.$product->id}}" class="add-to-cart">
														@csrf
														<input type="hidden" id="indice" name="product_id" value="{{Cart::count()}}">
														<input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
														<input type="hidden" name="product_id" value="{{$product->id}}">
														<input type="hidden" name="prix_product" value="{{$product->prix_product}}">
														<button type="submit" class="buy" id="panier-form">
															<i class="fas fa-shopping-cart fa-md fa-fw  text-gray-400" aria-hidden="true"></i>
														</button>
													</form>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-12 no-padding">
												<div class="content">
													<h4 class="title"><a href="#">{{$product->name_product}}</a></h4>
													<p class="price with-discount mb-2">{{$product->prix_product}} FCFA</p>
													<form action="#" id="{{'product_'.$product->id}}" class="add-to-cart">
														@csrf
														<input type="hidden" id="indice" name="product_id" value="{{Cart::count()}}">
														<input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
														<input type="hidden" name="product_id" value="{{$product->id}}">
														<input type="hidden" name="prix_product" value="{{$product->prix_product}}">
														<button type="submit" class="">
															<i class="fas fa-shopping-cart fa-md fa-fw  text-gray-400" aria-hidden="true"></i>
															Acheter
														</button>
													</form>	
												</div>
											</div>
										</div>
									</div>
								@endforeach
								<!-- End Single List  -->
												</div>
											</div>
										</div>
									</section>
								</div>
									<!-- End Shop Home List  -->
									<!-- Start Product Area -->
									<div class="product-area section" style="">
										<div class="container">
											<div class="row">
												<div class="col-12">
													<div class="section-title">
														<h2>Affichage par categorie</h2>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-12">
													<div class="product-info">
														<div class="nav-main">
															<!-- Tab Nav -->
															<ul class="nav nav-tabs" id="myTab" role="tablist">
																<li class="nav-item"><a class="nav-link " data-toggle="tab" href="#man" role="tab">Electricité</a></li>
																<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#women" role="tab">Maçonnerie</a></li>
																<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#kids" role="tab">Sanitaire</a></li>
																<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#accessories" role="tab">Peinture</a></li>
																<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#essential" role="tab">Plomberie</a></li>
																<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#prices" role="tab">Maison</a></li>
															</ul>
															<!--/ End Tab Nav -->
														</div>
														<div class="tab-content shop-services section home" id="myTabContent" style>
															<!-- Start Single Tab -->
															<div class="tab-pane fade  show" id="man" role="tabpanel">
																<div class="tab-single">
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
																									<input type="hidden" id="indice" name="product_id" value="{{Cart::count()}}">
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
																</div>
															</div>
															<!--/ End Single Tab -->
															<!-- Start Single Tab -->
															<div class="tab-pane fade active show" id="women" role="tabpanel">
																<div class="tab-single">
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
																									<input type="hidden" id="indice" name="product_id" value="{{Cart::count()}}">
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
																</div>
															</div>
															<!--/ End Single Tab -->
															<!-- Start Single Tab -->
															<div class="tab-pane fade show" id="kids" role="tabpanel">
																<div class="tab-single">
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
																									<input type="hidden" id="indice" name="product_id" value="{{Cart::count()}}">
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
																</div>
															</div>
															<!--/ End Single Tab -->
															<!-- Start Single Tab -->
															<div class="tab-pane fade" id="accessories" role="tabpanel">
																<div class="tab-single">
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
																</div>
															</div>
															<!--/ End Single Tab -->
															<!-- Start Single Tab -->
															<div class="tab-pane fade" id="essential" role="tabpanel">
																<div class="tab-single">
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
																</div>
															</div>
															<!--/ End Single Tab -->
															<!-- Start Single Tab -->
															<div class="tab-pane fade" id="prices" role="tabpanel">
																<div class="tab-single">
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
																</div>
															</div>
															<!--/ End Single Tab -->
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- End Product Area -->
								
							
    @endsection

