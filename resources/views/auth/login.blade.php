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
</head>
<body>
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
							<div class="">
								<button class="" style="border-radius:70px;width:150px;height:35px;size:12px;font-weight:bold;background:#191348;color:white;">Se Connecter</button>
								<button type="button" class="" data-dismiss="modal" style="border-radius:70px;width:150px;height:35px;size:12px;font-weight:bold;background:#BE1E2D;color:white;">Close</button>
							</div>
								
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
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
	}

	@media (min-width:992px) {
		.mat-login{
			width:60%;
			height:auto;
		}
	}

	@media (min-width:1200px) {
		
	}

</style>
</html>