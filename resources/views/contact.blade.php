@extends('layouts.app')
	@section('connect')
		<li><a href="#" data-toggle="modal" data-target="#myModal"> <i class="fas fa-sign-in-alt fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Inscription</a></li>
		<li><a href="login.html#"data-toggle="modal" data-target="#ModalLogin"> <i class="fas fa-user-lock fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Connexion</a></li>
	@endsection
    @section('content')

    <div>
        <div class="row">
            <div class="card col-12 md-4" style="border-radius:10px;">
                <div class="card-body">

                </div>
            </div>
            <div class="card col-12 md-4" style="border-radius:10px;">
                <div class="card-body">

                </div>
            </div>
            <div class="card col-12 md-4" style="border-radius:10px;">
                <div class="card-body">

                </div>
            </div>
        </div>

    </div>
    
    @endsection