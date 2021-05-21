@extends('layouts.appdashbord')
    @section('content')
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="container">
                        <h2 class="m-2 text-center">Gestion des proprietares des produits</h2>
                        <div class="d-flex justify-content-start m-4">
                            <a href="#" class="btn btn-primary mr-5" data-toggle="modal" data-target="#ajoutproprietaire" style="width:auto;"> <i class="fas fa-sign-in-alt fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Ajout de proprietaire</a>
                        </div>
                    </div>
                
                <!----- Affichage des proprietaire --->
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>ID proprietaire</th>
                                <th>Nom proprietaire</th>
                                <th>Supprimer</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($properties as $property)
                                <tr>
                                    <th>{{$property->id}}</th>
                                    <th>{{$property->name_property}}</th>
                                    <th>
                                    <form action="affiche-vendeur/{{$property->id}}" method="post">
                                        @csrf
                                        @method('delete')
                                    <button type="submit" class="btn btn-danger " id="" style=""><i class="fas fa-trash-alt"></i></i></button> 
                                    </form>
                                    </th>
                                </tr>
                            @endforeach
                            </tbody>
                        
                        </table>
                    </div>
                <!-- Finn d'affichage des proprietaires -->
                
            <div class="modal fade " id="ajoutproprietaire" >
                <div class="modal-dialog  modal-md">
                    <div class="modal-content" >
                        <!-- Modal Header -->
                        <div class="modal-header" style="">
                            <button type="button" class="close bg-danger btn-danger " data-dismiss="modal">&times;</button>
                        </div>                        
                        <!-- Modal body -->
                        <div class="modal-body ">
							<div class="  " style="height:100%;overflow-x:scroll;">
								<div class="card auth ">
									<div class="card-header auth-header login100-form-title" >
										<span class="login100-form-title-1" style="size:16px;font-weight:bold;">
											Ajout de proprietaire
										</span>
									</div>                        
									<!-- Modal body -->
									<div class="modal-body  p-3" style="height:auto;">
										<form action="/create-vendeur" method="post" id="add_vendeur">
											@csrf 
											<div class="row">
												<div class="form-group col-12 ">
													<label for="inputEmail" class="" style="font-weight:bold;color:red;">Nom proprietaire<span style="background-colol:red;">*</span></span></label>
													<div class="col-12">
														<input type="text" class="form-control" id="name_vendeur" name="name_property" placeholder="Entrer nom vendeur">
													</div>
												</div>
                                                <div class="col-12" id="info_vendeur"></div>
                                            </div> 
                                            <div class="row">
												<div class="form-group col-12">
													<label for="inputPassword" class="" style="font-weight:bold;color:red;">Description</label>
													<div class="col-12">
														<textarea name="desc" id="" cols="50" rows="5"></textarea>
													</div>
												</div>
											</div>
                                            <div class="d-flex justify-content-center " style="">
                                                <button class=" btn-success" style="border-radius:70px;width:200px;height:45px;size:12px;font-weight:bold;">
                                                    Enregistrer
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
            <script>
                    let add_vendeur = document.getElementById('add_vendeur');
                    let name_vendeur = document.getElementById('name_vendeur');
                    let info_vendeur = document.getElementById('info_vendeur');

                    // Formulaire categorie
                    add_vendeur.addEventListener('submit',function(e){
                        e.preventDefault();
                            if (name_vendeur.value==="") {
                                name_vendeur.style.border="1px solid red";
                                info_vendeur.classList.add("alert","alert-danger");
                                info_vendeur.innerText="veuiller remplir ce champ";
                            }
                            else
                            {
                                add_vendeur.submit();
                            }     
                    });
                </script>
    @endsection        