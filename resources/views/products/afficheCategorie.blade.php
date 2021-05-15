@extends('layouts.appdashbord')
    @section('content')
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="container">
                        <h2 class="m-2 text-center">Gestion des categories</h2>
                        <div class="d-flex justify-content-start m-4">
                            <a href="#" class="btn btn-primary " data-toggle="modal" data-target="#ajoutcategorie" > <i class="fas fa-sign-in-alt fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Ajout de categories</a>
                        </div>
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>ID Category</th>
                                <th>Nom Category</th>
                                <th>Supprimer</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <th>{{$category->id}}</th>
                                    <th>{{$category->name_category}}</th>
                                    <th>
                                    <form action="affiche_category/{{$category->id}}" method="post">
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
                    
                <div class="container">
                    
                </div>
            <div class="modal fade " id="ajoutcategorie" >
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
											Ajout de catégorie
										</span>
									</div>                        
									<!-- Modal body -->
									<div class="modal-body  p-3" style="height:auto;">
										<form action="/createCategory" method="post">
											@csrf 
											<div class="row">
												<div class="form-group col-12 ">
													<label for="inputEmail" class="" style="font-weight:bold;color:red;">Nom catégorie<span style="background-colol:red;">*</span></span></label>
													<div class="col-12">
														<input type="text" class="form-control" id="" name="name_category" placeholder="Entrer nom categorie">
													</div>
												</div>
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
            
    @endsection        