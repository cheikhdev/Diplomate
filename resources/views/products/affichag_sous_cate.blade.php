@extends('layouts.appdashbord')
    @section('content')
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="container">
                        <h2 class="text-center m-2">Gestion sous categories</h2>
                        <div class="d-flex justify-content-start m-4">
                            <a href="/createSous-Category" class="btn btn-primary mr-5" data-toggle="modal" data-target="#ajoutsouscategorie" style="width:auto;"> <i class="fas fa-sign-in-alt fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Ajout de   Sous categories</a>
                        </div>
                    </div>

                    <!--- Affichage de la liste des sous categorie -->
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Nom sous categorie</th>
                                <th>Nom categorie</th>
                                <th>Supprimer</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sous_categories as $sous_category)
                                <tr>
                                    <th>{{$sous_category->name}}</th>
                                    <th>{{$sous_category->category->name_category ?? ''}}</th>
                                    <th>
                                    <form action="affiche_sous_category/{{$sous_category->id}}" method="post">
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
                    <!--- fin de la liste des sous categorie -->
                    <div class="modal fade " id="ajoutsouscategorie" >
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
                                                    Ajout de sous catégorie
                                                </span>
                                            </div>                        
                                            <!-- Modal body -->
                                            <div class="modal-body  p-3" style="height:auto;">
                                                <form action="/createSousCategory" method="post"  id="add_sous">
                                                    @csrf 
                                                    <div class="row">
                                                        <div class="form-group col-12 ">
                                                            <label for="inputEmail" class="" style="font-weight:bold;color:red;">Nom sous catégorie<span style="background-colol:red;">*</span></span></label>
                                                            <div class="col-12">
                                                                <input type="text" class="form-control" id="sous_cat" name="nom_sous_category" placeholder="nom sous categorie">
                                                            </div>
                                                        </div>
                                            
                                                    </div> 
                                                    <div class="row">
                                                        <div class="form-group col-12">
                                                            <label for="sexe" class=" " style="color:red;">Categorie</label>
                                                            <select name="id_category" id="name_category_sous" class="form-control">
                                                                <option value=""></option>
                                                                    @foreach($categories as $key => $value)
                                                                    <option value="{{$key}}">{{$value}}</option>
                                                                    @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-12" id="info_cat_sous"></div>
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