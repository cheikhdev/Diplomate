<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Matcosen Login</title>
	<link rel="icon" type="image/png" href="images/embleme.PNG">
	<link href="{{asset('css/app.css')}}" rel="stylesheet" />
    <link href="{{asset('css/all.css')}}" rel="stylesheet" />
	
	<!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/css_home/bootstrap.css')}}">
	
	 <!-- Font Awesome -->
	 <link rel="stylesheet" href="{{asset('css/css_home/font-awesome.css')}}">
  <!-- Fancybox -->
    <link rel="stylesheet" href="{{asset('css/css_home/jquery.fancybox.min.css')}}">
	<link href="{{asset('css/zxcss_home/style.css')}}" rel="stylesheet" />
</head>
<body>
<style>
	body{
		background:#191348;
	}
	@media (min-width:576px) {
		.mat-login{
			width:100%;
			height:auto;
		}
	}

	@media (min-width:768px) {
		.mat-login{
			width:100%;
			height:auto;
		}
		section{
			margin-left:10px;
			margin-right:10px;
		}
	}

	@media (min-width:992px) {
		.mat-login{
			width:60%;
			height:auto;
		}
	}

	@media (min-width:1200px) {
		
	}
	.redirect-inscription{
			font-weight:bold !important;
			size:14px !important;
			color:#191348 !important;
			text-decoration:underline !important;
			cursor:pointer !important;
		}
		.redirect-inscription:hover{
			color:#BE1E2D !important;
			
			text-decoration:underline !important;
		}

</style>
		@if (session('success_info'))
    		<div class=" mt-5 alert alert-success">{{session('success_info')}}</div>
  		@endif
		@if (session('danger_info'))
    		<div class="mt-5 alert alert-danger">{{session('danger_info')}}</div>
  		@endif
	<section class="d-flex justify-content-center mt-5 mb-5" >
		<div style="" class="mat-login">
			<div class="card">
				<div class="card-header">
					<img src="images/embleme.PNG" alt="">
					<h3 class="text-center" style="font-weight:bold;">MATCOSEN-LOGIN</h3>
				</div>
				<div class="card-body p-5">
					<div class="container">
						<form class="" method="POST" action="{{route('login')}}">
							@csrf
							<div class="mb-5" data-validate="Username is required">
								<!-- class="label-input100">Identifiant</span-->
								<div class="">
									
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
								<div class="">
									
									<input id="password" type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Entrer votre mot de passe" >

									@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
								<span class=""></span>
							</div>

							<div class="mb-3 d-flex justify-content-end ">
								@if (Route::has('password.request'))
									<a  href="{{ route('password.request') }}">
										<span style="">Mot de passe oublié?</span>
									</a>
								@endif
							</div>
							<div class="d-flex justify-content-between">
								<button class="pl-3 pr-3" style="border-radius:70px;width:auto;height:auto;size:12px;font-weight:bold;background:#191348;color:white;">Se Connecter</button>
								<button type="button" class="pl-3 pr-3" data-dismiss="modal" style="border-radius:70px;width:auto;height:auto;size:12px;font-weight:bold;background:#BE1E2D;color:white;">Close</button>
							</div>
								
						</form>
						<div class="d-flex justify-content-center mt-5">
							<a href="#" data-toggle="modal" data-target="#Modal_inscription" class="redirect-inscription" style=""> <i class="fas fa-sign-in-alt fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i> S'inscrire</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- start modal incription-->
	<div class="modal fade" id="Modal_inscription" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header" style="height:auto !important;">
					<div class="mb-1 modal-title w-100 ">
						<img src="images/embleme.PNG" alt="" >
						<h4 class="text-center">Matcosen-Inscription</h4>
					</div>
					
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					
				</div>
				<div class="modal-body container">
				<form action="{{route('ajouter_user')}}" method="post">
											@csrf 
											<div class="row">
												<div class="form-group col-12">
													<label for="inputEmail" class="ml-3" style="font-weight:bold;color:black;">Prénom</label>
													<div class="col-12">
														<input type="text" class="form-control h-50" id="prenom" name="prenom" placeholder="Votre Prenom">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="form-group col-12 ">
													<label for="inputPassword" class="ml-3" style="font-weight:bold;color:black;">Nom</label>
													<div class="col-12">
											     	<input type="text" class="form-control h-50" id="nom" name="nom" placeholder="Votre Nom">
													</div>
												</div>
											</div>
											<div class="row ">
												<div class="form-group col-12">
														<label for="inputPassword" class="ml-3" style="font-weight:bold;color:black;">Adresse</label>
														<div class="col-12">
															<input type="text" class="form-control h-50" id="adresse" name="adresse" placeholder="Votre Adresse">
														</div>
												</div>
											</div>
											<div class="row">
												<div class="form-group col-12 ">
													<label for="inputPassword" class="ml-3"style="font-weight:bold;color:black;">Telephone</label>
													<div class="col-12">
														<input type="text" class="form-control h-50" id="lieu" name="phone" placeholder="Votre Telephone">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="form-group col-12 ">
													<label for="inputPassword" class="ml-3" style="font-weight:bold;color:black;">Email</label>
													<div class="col-12">
														<input type="email" class="form-control h-50" id="date" name="email" placeholder="Votre mail">
													</div>
												</div>
											</div>
											<div class="row ">
												<div class="form-group col-12">
														<label for="inputPassword" class="ml-3" style="font-weight:bold;color:black;">Mot de passe</label>
														<div class="col-12">
															<input type="password" class="form-control h-50" id="adresse" name="password" placeholder="Votre password">
														</div>
												</div>
											</div>
											<div class="row">
												<div class="form-group col-12">
													<label for="inputPassword"class="ml-3" style="font-weight:bold;color:black;">Cofirmer mot de passe</label>
													<div class="col-12">
														<input type="password" class="form-control h-50" id="lieu" name="confirme_pass" placeholder="confirmer password">
													</div>
												</div>
											</div>
											<div class="d-flex justify-content-around mb-4">         
												<button type="submit" style="width:150px;border-radius:50px;height:30px !important;background:#191348; color:white;" class="">Enregistrer</button>
												<button type="reset" style="width:150px;border-radius:50px;height:30px !important;background:#BE1E2D; color:white;" class="" data-dismiss="modal">Annuler</button>
											</div>
										</form>
					</div>
				
				</div>
			</div>
		</div>
		<!-- end modal inscription-->
	</section>
	<script src="{{asset('js/app.js')}}"></script>   
<script src="{{asset('js/js_home/jquery.min.js')}}"></script>
    <script src="{{asset('js/js_home/jquery-migrate-3.0.0.js')}}"></script>
    <script src="{{asset('js/js_home/jquery-ui.min.js')}}"></script>
<!-- Popper js -->
    <script src="{{asset('js/js_home/popper.min.js')}}"></script>
 <!-- Bootstrap js -->
    <script src="{{asset('js/js_home/bootstrap.min.js')}}"></script>
</body>

</html>