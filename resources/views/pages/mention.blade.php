<!DOCTYPE html>
<html lang="fr">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Matcosen - eQuincaillerie en ligne.</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/logo.jpg">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	      
	<!-- StyleSheet -->
	
	
    <link href="{{asset('css/app.css')}}" rel="stylesheet" />
    <link href="{{asset('css/all.css')}}" rel="stylesheet" />
	<!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/css_home/bootstrap.css')}}">
  <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('css/css_home/magnific-popup.min.css')}}">
   

  <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/css_home/font-awesome.css')}}">
  <!-- Fancybox -->
    <link rel="stylesheet" href="{{asset('css/css_home/jquery.fancybox.min.css')}}">
  <!-- Themify Icons -->
    <link rel="stylesheet" href="{{asset('css/css_home/themify-icons.css')}}">
  <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{asset('css/css_home/niceselect.css')}}">
  <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('css/css_home/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/css_home/style2.css')}}">
  <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{asset('css/css_home/flex-slider.min.css')}}">
  <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('css/css_home/owl-carousel.css')}}">
  <!-- Slicknav -->
    <link rel="stylesheet" href="{{asset('css/css_home/slicknav.min.css')}}">
  <!-- Eshop StyleSheet -->
  <link href="{{asset('css/css_home/reset.css')}}" rel="stylesheet" />
  <link href="{{asset('css/css_home/responsive.css')}}" rel="stylesheet" />
  <link href="{{asset('css/css_home/style.css')}}" rel="stylesheet" />
  <link href="{{asset('css/css_home/style2.css')}}" rel="stylesheet" />
  <!--link href="{{asset('css/css_home/frontend.min.css')}}" rel="stylesheet" />
  <link href="{{asset('css/css_home/style.min.css')}}" rel="stylesheet" />
  <link href="{{asset('css/css_home/post-10.css')}}" rel="stylesheet" /-->
  <link  href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  <link  href="https://fonts.googleapis.com/css?family=Rancho&effect=fire-animation|3d-float|neon|canvas-print">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,900" rel="stylesheet" />
<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"> 


</head>	
<body class="js" style="font-family: Georgia, 'Times New Roman', Times, serif;">
	
	<style>
		.btnedit:hover{
			background-color:;
		}
	</style>
	
	
	<!-- Preloader -->
		<div class="preloader">
			<div class="preloader-inner">
				<div class="preloader-icon">
					
					<span></span>
				</div>
			</div>
		</div>
	<!--End Preloader -->

	<!-- Header -->
	
	<header class="header shop">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-12">
						<!-- Top Left -->
						<div class="">
							<ul class="list-main">		
								<li><a href="#" > <i class="fas fa-envelope fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>support@matcosen.com</a></li>
        						<li><a href="{{url('https://wa.me/221774781907')}}" target="_blank" class="text-success"><i class="fab fa-whatsapp text-success"></i>77 478 19 07</a></li>
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
					<div class="col-lg-8 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
							<ul class="list-main">
								@yield('connect')
								
							</ul>
						</div>
						<!-- End Top Right -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-12">
						<!-- Logo -->
						<div class="logo" style="margin-left:5px; margin-top:-15px;">
							<a href="/home"><img src="{{asset('images/logo.jpg')}}" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form --->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form">
									<input type="text" placeholder="Recherche de produits...." name="search">
									<button value="search" type="submit"><i class="fas fa-search"></i></button>
								</form>
							</div>
							<!-- End Search Form -->
						</div>
						<!-- End Search Form -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-7 col-md-7 col-12" style="">
						<div class="search-bar-top w-100">
							<div class="search-bar w-100">
								<form action="{{route('products.search')}}" class="w-100">
									<input type="text" name="q" class="form-control " placeholder="Recherche de Produits" value="{{ request()->q ?? '' }}" style="width:90%;">
									<a href="{{('partials.search')}}" class="w-20"><button class="btnn"><i class="fas fa-search"></i></button></a>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-12">
						<div class="right-bar">
							
							<div class="sinlge-bar shopping">
								@yield('indice_cart')
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@if (request()->input('q'))
			<div class="row align-items-center justify-content-center">
				<h4 class="alert alert-danger " style=" font-size: 16px; width: 60%; text-align: center;color: #FFFFFF;">{{ $products->total() }} résultat(s) pour la recherche "{{ request()->q }}"</h4>
			</div>
		@endif
		<!-- Header Inner -->
		<div class="header-inner" style=" " >
			<div class="container">
				<div class="cat-nav-head" >
					<div class="row" >
						<div class="col-lg-3">
							<div class="all-category">
								<h3 class="cat-heading" style=""><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>
								<ul class="main-category">
									<li><a href="#">Electricité <i class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class="sub-category" style="z-index:9999 ;">
											<li><a href="#">Eclairages</a></li>
											<li><a href="#">Cablages</a></li>
											<li><a href="#">Appareillage</a></li>
											<li><a href="#">Protection</a></li>
											
										</ul>
									</li>
									
									<li><a href="#">Maçonnerie<i class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class="sub-category" style="z-index:9999 ;">
											<li><a href="#">Ciment</a></li>
											<li><a href="#">Fer</a></li>
											<li><a href="#">Graviers</a></li>
										</ul>
									</li>
									<li><a href="#">Sanitaire<i class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class="sub-category" style="z-index:9999 ;">
											<li><a href="#">.............</a></li>
											<li><a href="#">.............</a></li>
											<li><a href="#">..............</a></li>
											<li><a href="#">..............</a></li>
										</ul>
									</li>
									<li><a href="#">Peinture<i class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class="sub-category" style="z-index:9999 ;">
											<li><a href="#">.............</a></li>
											<li><a href="#">.............</a></li>
											<li><a href="#">..............</a></li>
											<li><a href="#">..............</a></li>
										</ul>
									</li>
									<li><a href="#">Plomberie<i class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class="sub-category" style="z-index:9999 ;">
											<li><a href="#">Salle de bain</a></li>
											<li><a href="#">Robineterie</a></li>
											
										</ul>
									</li>
									
								</ul>
							</div>
						</div>
						
						<div class="col-lg-9 col-12" id="cole">
							<div class="menu-area" >
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg" >
									<div class="navbar-collapse" >	
										<div class="nav-inner" id="bare">	
											<ul class="nav main-menu menu navbar-nav" id="" style="font-size:16px;">
												
													<li id="acceuil" class=""><a href="{{url('/home')}}" style=""><i class="fas fa-home fa-lg fa-fw mr-2 text-gray-400" aria-hidden="true"></i>acceuil</a></li>
													<li id="propos" class=""><a href="{{url('/home')}}" class=""><i class="fas fa-medkit fa-lg fa-fw mr-2 text-gray-400" aria-hidden="true"></i>A propos<i class="fas fa-angle-down"></i></a>
														<ul class="dropdown">
															<li><a href="shop-grid.html">Mention légale</a></li>
															<li><a href="cart.html">Conditions générales de vente</a></li>
															<li><a href="/contact">Contact</a></li>
															
														</ul>
													</li>												
													<li id="actualite" class=""><a href="{{url('/home')}}" class="">Actualite</a></li>
													<li id="partenaires" class=""><a href="{{url('/home')}}" class="">Nos Partenaires<i class="fas fa-angle-down"></i></a>
														<ul class="dropdown">
															
															<li><a href="cart.html">Inco</a>
                               
															</li>
															<li><a href="checkout.html">Ingelec</a>
																
															</li>
															<li><a href="checkout.html">Seignerie</a></li> 
															<li><a href="checkout.html">Legrand</a></li> 
														</ul>
													</li>
													<li id="" class=""><a href="{{url('/contact')}}" class="1">Contactez-Nous</a></li>
																
													
												</ul>
										</div>
									</div>
								</nav>
								
								<!--/ End Main Menu -->	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
	
    <script type="text/javascript">
$(document).ready(function(){
    $('.nav li').click(function(){
        $(this).addClass('active');
        $(this).siblings().removeClass('active');

    });

});
    </script>
	<div class="p-2">
	<marquee><h3 style="width: 67%;background:white;color:#BE1E2D;">Bienvenue a Matcosen , la plateforme e-quincaillerie.</h3></marquee>
	</div>
	<!--/ End Header -->
	<!-- Single Slider -->
		@yield('slide')
	<!--/ End Slider Area -->
		<div class="container">
			@yield('content')
		</div>
	<!-- Start Shop Services Area -->
	<section class="shop-services section home">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="fas fa-rocket"></i>
						<h4>Livraison gratuite</h4>
						<p>Commandes de plus de 500 000 FR</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="fas fa-retweet"></i>
						<h4>Retour Gratuit</h4>
						<p>Retour dans les 30 jours</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="fas fa-lock"></i>
						<h4>Paiement sécurisé</h4>
						<p>Paiement 100% sécurisé</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="fas fa-tag"></i>
						<h4>Meilleur prix</h4>
						<p>Prix ​​garanti</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Services Area -->
	<!-- Start Shop Newsletter  -->
	<section class="shop-newsletter section">
		<div class="container">
			<div class="inner-top">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
						<!-- Start Newsletter Inner -->
						<div class="inner">
							<h4>Newsletter</h4>
							<p> Abonnez-vous à notre newsletter et recevez <span>les promos et nouvelles arrivages</span> de MatcoSen.</p>
							<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="email" placeholder="Votre adresse email" required="" type="email">
								<button class="btn">Souscrire</button>
							</form>
						</div>
						<!-- End Newsletter Inner -->
					</div>
				</div>
			</div>
		</div>
    
	</section>
	<!-- End Shop Newsletter -->
	
	
	<!-- Debut modall inscriptionnnn -->
			<div class="modal fade" id="myModal">
                <div class="modal-dialog  modal-md">
                    <div class="modal-content" >
                        <!-- Modal Header -->
                        <div class="modal-header" style="">
                            <button type="button" class="close bg-danger btn-danger " data-dismiss="modal"><h2 style="color: black;">&times;</h2></button>
                        </div>                        
                        <!-- Modal body -->
                        <div class="modal-body ">
							<div class="  " style="height:100%;overflow-x:scroll;">
								<div class="card auth ">
									<div class="card-header auth-header login100-form-title" style="background-position:center;background: url({{asset('images/logo.jpg')}});">
										<span class="login100-form-title-1" style="size:16px;font-weight:bold;">
											Inscription
										</span>
									</div>                        
									<!-- Modal body -->
									<div class="modal-body  p-3" style="height:auto;">
										<form action="{{route('ajouter_user')}}" method="post">
											@csrf 
											<div class="row">
												<div class="form-group col-12 col-sm-12 col-md-6">
													<label for="inputEmail" class="ml-3" style="font-weight:bold;color:black;">Prénom</label>
													<div class="col-sm-10">
														<input type="text" class="form-control h-50" id="prenom" name="prenom" placeholder="Entrer Prenom">
													</div>
												</div>
												<div class="form-group col-12 col-sm-12 col-md-6">
													<label for="inputPassword" class="ml-3" style="font-weight:bold;color:black;">Nom</label>
													<div class="col-sm-10">
														<input type="text" class="form-control h-50" id="nom" name="nom" placeholder="Entrer Nom">
													</div>
												</div>
											</div>
											<div class="row ">
												<div class="form-group col-12 col-sm-12 col-md-6">
														<label for="inputPassword" class="ml-3" style="font-weight:bold;color:black;">Adresse</label>
														<div class="col-sm-10">
															<input type="text" class="form-control h-50" id="adresse" name="adresse" placeholder="Entrer Adresse">
														</div>
												</div>
												
												<div class="form-group col-12 col-sm-12 col-md-6">
													<label for="inputPassword" class="ml-3"style="font-weight:bold;color:black;">Telephone</label>
													<div class="col-sm-10">
														<input type="text" class="form-control h-50" id="lieu" name="phone" placeholder="Entrer Telephone">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="form-group col-12 ">
													<label for="inputPassword" class="ml-3" style="font-weight:bold;color:black;">Email</label>
													<div class="col-sm-10">
														<input type="email" class="form-control w-75 h-50" id="date" name="email" placeholder="Entrer mail">
													</div>
												</div>
											</div>
											<div class="row ">
												<div class="form-group col-12 col-sm-12 col-md-6">
														<label for="inputPassword" class="ml-3" style="font-weight:bold;color:black;">Mot de passe</label>
														<div class="col-sm-10">
															<input type="password" class="form-control h-50" id="adresse" name="password" placeholder="Entrer password">
														</div>
												</div>
												
												<div class="form-group col-12 col-sm-12 col-md-6">
													<label for="inputPassword"class="ml-3" style="font-weight:bold;color:black;">Cofirmer mot de passe</label>
													<div class="col-sm-10">
														<input type="password" class="form-control h-50" id="lieu" name="confirme_pass" placeholder="confirmer password">
													</div>
												</div>
											</div>
											<div class="d-flex justify-content-around mb-1">         
												<button type="submit" style="width:150px;border-radius:50px;height:30px !important;" class=" btn-success">Enregistrer</button>
												<button type="reset" style="width:150px;border-radius:50px;height:30px !important;" class=" btn-danger" data-dismiss="modal">Annuler</button>
											</div>
										</form>
									</div>  					
                    			</div>
							</div>
                		</div>
            		</div>
				</div>
			</div>
       <!--fin modall inscription-->
		 <!-- Debut modall Cnnexion -->
		
			<div class="modal fade ml-5  " id="ModalLogin" >
                <div class="modal-dialog  modal-md">
                    <div class="modal-content" >
                        <!-- Modal Header -->
                        <div class="modal-header" style="">
                          
                            <button type="button" class="close bg-danger btn-danger " data-dismiss="modal"><h2 style="color: black;">&times;</h2></button>
                        </div>                        
                        <!-- Modal body -->
                        <div class="modal-body ">
						<div class="  " style="height:100%;overflow:hidden;">
			<div class="card auth ">
				<div class="card-header auth-header login100-form-title " style="background-position:center;background-image: url({{asset('images/logo.jpg')}});">
					<span class="login100-form-title-1" style="size:16px;font-weight:bold;">
						Login
					</span>
				</div>
				<div class="card-body auth-body" >
					<form class="auth-form" method="POST" action="{{ route('login') }}">
						@csrf
						<div class="mb-5" data-validate="Username is required">
							<!-- class="label-input100">Identifiant</span-->
							<div class="input-group login w-75">
								<span class="input-group-addon"><i class="fas fa-user"></i></span>
								<input id="email" type="email" class=" form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Entrer votre login">

								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							<span class=""></span>
						</div>

						<div class="mb-2" data-validate = "Password is required">
							<!--span class="label-input100">Mot de passe</span-->
							<div class="input-group pass w-75 ">
								<span class="input-group-addon"><i class="fas fa-lock"></i></span>
								<input id="password" type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Entrer votre mot de passe" >

								@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							<span class=""></span>
						</div>

						<div class="mb-3 d-flex justify-content-end">
							@if (Route::has('password.request'))
								<a  href="{{ route('password.request') }}">
									<span style="">Mot de passe oublié?</span>
								</a>
							@endif
						</div>
						<div class="d-flex justify-content-center " style="">
							<button class=" btn-success" style="border-radius:70px;width:150px;height:35px;size:12px;font-weight:bold;">
								Se Connecter
							</button>
							
						</div>
					</form>
				</div>
			</div>
		</div>
    </div>                                      
    </div>
    </div>
    </div>
   
	 <!--fin modall connexion-->
	<!-- Start Footer Area -->
	<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="logo">
								<a href="/home"><img src="{{asset('images/logo.jpg')}}" style="" width="230px" height="340px"></a>
							</div>
							<p class="text" style="font: bold;">Bienvenue a Matcosen votre quincailerie<br> digitale de reference 
							.</p>
							<p class="call">Question? Appeler 24/7<span><a href="tel:123456789">+221 77 478 19 07</a></span></p>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4 class="btn btn-danger">Information</h4>
							<ul>
								<li><a href="#">A propos</a></li>
								<li><a href="#">Faq</a></li>
								<li><a href="#">Conditions et Termes</a></li>
								<li><a href="#">Nous contacter</a></li>
								
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4 class="btn btn-danger">Nos Service</h4>
							<ul>
								<li><a href="#">Methodes de paiement</a></li>
								<li><a href="#">Money-back</a></li>
								<li><a href="#">Retourner</a></li>
								<li><a href="#">Shipping</a></li>
								
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer social">
							<h4 class="btn btn-danger">Entrer en contact</h4>
							<!-- Single Widget -->
							<div class="contact">
								<ul>
									<li>Dakar, adresse.</li>
									<li>info@matcom.com</li>
									<li>Mobil:+221 77 478 19 07</li>
									<li>Fixe: +221 33 xxx xx</li>
								</ul>
							</div>
							<!-- End Single Widget -->
							<ul>
								<li><a href="#"><i class="fab fa-facebook text-info"></i></a></li>
								<li><a href=""><i class="fab fa-twitter"></i></a></li>
								<li><a target="_blank" href="{{url('https://wa.me/221774781907')}}"><i class="fab fa-whatsapp text-success"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<p>Copyright © 2020 <a href="http://www.matcosen.com" target="_blank">Matcosen</a>  - Tous droits reservés.</p>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="right">
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->
	
<!-- Jquery --> 
<!--script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script!-->
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
<script src="{{asset('js/app.js')}}"></script>   
<script src="{{asset('js/js_home/jquery.min.js')}}"></script>
    <script src="{{asset('js/js_home/jquery-migrate-3.0.0.js')}}"></script>
    <script src="{{asset('js/js_home/jquery-ui.min.js')}}"></script>
<!-- Popper js -->
    <script src="{{asset('js/js_home/popper.min.js')}}"></script>
 <!-- Bootstrap js -->
    <script src="{{asset('js/js_home/bootstrap.min.js')}}"></script>
<!-- Color JS -->
    <script href="https://cdnjs.cloudflare.com/ajax/libs/colors/3.0.0/js/colors.min.js"></script> 
<!-- Slicknav JS -->
    <script src="{{asset('js/js_home/slicknav.min.js')}}"></script>
<!-- Owl Carousel JS -->
    <script src="{{asset('js/js_home/owl-carousel.js')}}"></script>
<!-- Magnific Popup JS -->
    <script src="{{asset('js/js_home/magnific-popup.js')}}"></script>
<!-- Waypoints JS -->
    <script src="{{asset('js/js_home/waypoints.min.js')}}"></script>
<!-- Countdown JS -->
    <script src="{{asset('js/js_home/finalcountdown.min.js')}}"></script>
<!-- Nice Select JS -->
    <script src="{{asset('js/js_home/nicesellect.js')}}"></script>
<!-- Flex Slider JS -->
    <script src="{{asset('js/js_home/flex-slider.js')}}"></script>
<!-- ScrollUp JS -->
    <script src="{{asset('js/js_home/scrollup.js')}}"></script>
<!-- Onepage Nav JS -->
    <script src="{{asset('js/js_home/onepage-nav.min.js')}}"></script>
<!-- Easing JS -->
    <script src="{{asset('js/js_home/easing.js')}}"></script>
<!-- Active js -->
	<script src="{{asset('js/js_home/active.js')}}"></script>

	<script src="{{asset('js/js_home/panier.js')}}"></script>
	<script src="{{asset('js/js_home/class_active.js')}}"></script>
	<!--script src="{{asset('js/js_home/add_cart.js')}}"></script-->
	<script src="{{asset('js/js_home/commande.js')}}"></script>
	<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script href="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
	
    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
        });
        jQuery(document).ready(function($) {
                $(".clickable-row").click(function() {
                    window.location = $(this).data("href");
                });
           
        } );
    </script>
	<script>
		let bod = document.getElementByTagName('body');
		let bare = doccument.getElementById('bare');
		let  shopping = document.getElementById('shopping');
		if(bod.scrollTo(10,10)){
			bare.append('shopping');
		}
	</script>
	
</body>
</html>