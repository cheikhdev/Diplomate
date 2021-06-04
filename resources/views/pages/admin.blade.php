<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matcosen admin</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" />
    <link href="{{asset('css/all.css')}}" rel="stylesheet" />
	<!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/css_home/bootstrap.css')}}">
</head>
<body>
    <div class="d-flex justify-content-center">
        @if (session('danger_info'))
    		<div class="alert alert-danger m-2">{{session('danger_info')}}</div>
  		@endif
        <div class="card w-75 mt-5">
            <div class="card-header">
                <h3>Accès au dashbord</h3>
            </div>
            <div class="card-body">
                <form class="" method="POST" action="{{route('login')}}">
					@csrf
					<div class="mb-5" data-validate="Le login est oligatoire">
						<div class="">
							<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Entrer votre login">
                            @error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<span class=""></span>
					</div>

					<div class="mb-2" data-validate = "Le mot de passe est obligtoire">
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
								<span>Mot de passe oublié?</span>
							</a>
					    @endif
					</div>
					<button type="button" class="" data-dismiss="modal" style="border-radius:70px;width:150px;height:35px;size:12px;font-weight:bold;background:#BE1E2D;"><span style="color: white;
					">Quitter<span></button>
					<button class="" style="border-radius:70px;width:150px;height:35px;size:12px;font-weight:bold;background:#191348;"><span style="color: white;
					">Se Connecter<span></button>
				</form>
            </div>
        </div>
    </div>
</body>
</html>