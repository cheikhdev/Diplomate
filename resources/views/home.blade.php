@extends('layouts.app')
		

      @section('slide')
     
		<!-- Slider Area -->
        <section class="hero-slider" style="margin-left:300px;margin-right:100px; margin-top:-2px;padding:5px;">
        <!-- Single Slider -->
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators" style="left: -18%;">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active mr-3">
                    <img class="second-slide animated zoomInDown d-none d-md-block" src="{{asset('images/materiel3.jpg')}}" style="height:50vh; width:80%;" alt="">
                    <div class="container">
                      <div class="carousel-caption d-none d-md-block"  style="left: -3%;">
                        <h1 class="animated fadeInDown" style="color: #ffffff;">Matcosen Equipement.</h1>
                        <p class="animated fadeInRight" style="color: #ffffff;">MATCOSEN .</p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="second-slide animated zoomInDown d-none d-md-block" src="{{asset('images/materiel2.jpg')}}" style="height:50vh; width:80%;" alt="">
                    <div class="container">
                      <div class="carousel-caption d-none d-md-block" style="left:-3%;">
                        <h1 class="animated fadeInDown" style="color: #ffffff;">Matcosen Equipement.</h1>
                        <p class="animated fadeInRight" style="color: #ffffff;">MATCOSEN .</p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="second-slide animated zoomInDown d-none d-md-block" src="{{asset('images/construction-material.jpeg')}}" alt="" style="height:50vh; width:80%;">
                    <div class="container">
                      <div class="carousel-caption d-none d-md-block" style="left: -3%;">
                        <h1 class="animated fadeInDown" style="color: #ffffff;">Matcosen Equipement.</h1>
                        <p class="animated fadeInRight" style="color: #ffffff;">MATCOSEN .</p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="second-slide animated zoomInDown d-none d-md-block" src="{{asset('images/robinetcuisine.jpg')}}" alt="" style="height:50vh; width:80%;">
                    <div class="container">
                      <div class="carousel-caption d-none d-md-block"  style="left: -3%;">
                       <h1 class="animated fadeInDown" style="color: #ffffff;">Matcosen Equipement.</h1>
                        <p class="animated fadeInRight" style="color: #ffffff;">MATCOSEN .</p>
                        
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="second-slide animated zoomInDown d-none d-md-block" src="{{asset('images/materiel1.jpg')}}" alt="" style="height:50vh; width:80%;">
                    <div class="container">
                      <div class="carousel-caption d-none d-md-block" style="left: -3%;">
                        <h1 class="animated fadeInDown" style="color: #ffffff;">Matcosen Equipement.</h1>
                        <p class="animated fadeInRight" style="color: #ffffff;">MATCOSEN .</p>
                        
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
				<section class="shop-home-list section w-100">
					<div class="container">
						<div class="row mb-5" style="background:#19134857;">
							<div class=" col-12" style="">
								<div class="row">
									<div class="col-12">
										<div class="shop-section-title">
											<h1 style="color:white;">Maçonnerie et Peinture</h1>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<div class="owl-carousel popular-slider" style="padding:1px;">
											<!-- Start Single Product -->
											@foreach($products as $product)
												<div class="single-list mr-3 bg-white">
													<div class="row">
														<div class="col-lg-6 col-md-6 col-12">
															<div class="list-image overlay">
															   <a href="/produit/{{$product->id }}/show"><img style="height:100%;"  src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="#"></a>
															</div>
														</div>
														<div class="col-lg-6 col-md-6 col-12 no-padding">
															<div class="content">
																<h4 class="title"><a href="/produit/{{$product->id}}/show"><span style="font-size: 18px;">{{$product->name_product}}</span></a></h4>
																<span class="" style="font-style: italic;font-size: 15px;color: #be1e2d;font-weight: bold;
																">{{$product->prix_product}}
																<em style="font-weight: bold;
																color: black;">FcFa</em></span><br>
															    
																<form action="#" id="{{'product_'.$product->id}}" class="add-to-cart">
																	@csrf
																	<input type="hidden" id="indice" name="product_id" value="{{Cart::count()}}">
																	<input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
																	<input type="hidden" name="product_id" value="{{$product->id}}">
																	<input type="hidden" name="prix_product" value="{{$product->prix_product}}">
																	<input type="hidden" name="quantite" value="1">
																	<button type="submit">
																		<i class="fas fa-shopping-cart fa-md fa-fw  text-gray-400" aria-hidden="true"></i>
																		Acheter
																	</button>
																</form>	
															</div>
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
						<div class="row mb-5" style="background:#19134857; ">
							<div class=" col-12" style="">
								<div class="row">
									<div class="col-12">
										<div class="shop-section-title">
											<h1 style="color:white;">Sanitaire et Plomberie</h1>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<div class="owl-carousel popular-slider" style="padding:1px;">
										@foreach($products as $product)
												<div class="single-list mr-3 bg-white">
													<div class="row">
														<div class="col-lg-6 col-md-6 col-12">
															<div class="list-image overlay">
															<a href="/produit/{{$product->id}}/show">	<img style="height:100%;"  src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="#"></a>
																
															</div>
														</div>
														<div class="col-lg-6 col-md-6 col-12 no-padding">
															<div class="content">
																<h4 class="title"><a href="/produit/{{$product->id}}/show"><span style="font-size: 18px;">{{$product->name_product}}</span></a></h4>
																<span class="" style="font-style: italic;font-size: 15px;color: #be1e2d;font-weight: bold;
																">{{$product->prix_product}}
																<em style="font-weight: bold;
																color: black;">FcFa</em></span><br>
															    
																<form action="#" id="{{'product_'.$product->id}}" class="add-to-cart">
																	@csrf
																	<input type="hidden" name="quantite" value="1">
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
											<!-- End Single Product -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row" style="background:#19134857; ">
							<div class="col-12" style="">
								<div class="row">
									<div class="col-12">
										<div class="shop-section-title">
											<h1 style="color:white;">Electricité</h1>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<div class="owl-carousel popular-slider" style="padding:1px;">
										<!-- Start Single Product -->
											@foreach($products as $product)
												<div class="single-list mr-3 bg-white">
													<div class="row">
														<div class="col-lg-6 col-md-6 col-12">
															<div class="list-image overlay">
															<a href="/produit/{{$product->id}}/show">	<img style="height:100%;"  src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="#"></a>
															</div>
														</div>
														<div class="col-lg-6 col-md-6 col-12 no-padding">
															<div class="content">
																<h4 class="title"><a href="/produit/{{$product->id}}/show"><span style="font-size: 18px;">{{$product->name_product}}</span></a></h4>
																<span class="" style="font-style: italic;font-size: 15px;color: #be1e2d;font-weight: bold;
																">{{$product->prix_product}}
																<em style="font-weight: bold;
																color: black;">FcFa</em></span><br>
															    
																<form action="#" id="{{'product_'.$product->id}}" class="add-to-cart">
																	@csrf
																	<input type="hidden" name="quantite" value="1">
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
											<!-- End Single Product -->
										</div>
									</div>
								</div>
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
														<h2>Les derniers produits ajoutées</h2>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-12">
													<div class="product-info">
														<div class="tab-content shop-services section home" id="myTabContent" style>
															<!-- Start Single Tab -->
															<div class="tab-pane fade active  show" id="man" role="tabpanel">
																<div class="tab-single">
																	<div class="row">
																		<div class="col-12">
																			<div class="owl-carousel popular-slider" style="padding:5px;">
																				<!-- Start Single Product -->
																@foreach($products as $product)
																<div class="single-product p-3" style="width:300px;height:300px;">
																						<div class="product-img">
																							<a href="product-details.html">
																								<img class="default-img" style="width:300px;height:150px;" src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="#">
																								<img class="hover-img" src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="#">
																							</a>
																							<div class="button-head">
																								<div class="product-action">
																									<a  title="Quick View" href="/produit/{{$product->id}}/show"><i class=" fas fa-eye"></i><span>Ajout et details</span></a>
																									<a title="Wishlist" href="#"><i class=" fas fa-heart "></i><span>{{$product->name_product}}</span></a>
																									<a title="Compare" href="#"><i class="fas fa-bar-chart-alt"></i><span>Ajout et details</span></a>
																								</div>
																								<div class="product-action-2">
																									<form action="{{route('cart.store')}}" method="POST"  class="add-to-cart">
																										@csrf
																										<input type="hidden" id="indice" name="" value="{{Cart::count()}}">
																										<input type="hidden" name="quantite" value="1">																				<input type="hidden" name="id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
																										<input type="hidden" name="product_id" value="{{$product->id}}">
																										<input type="hidden" name="prix_product" value="{{$product->prix_product}}">
																										<button type="submit" class="buy">
																											<i class="fas fa-shopping-cart fa-md fa-fw  text-gray-400" aria-hidden="true"></i>
																											Acheter
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
