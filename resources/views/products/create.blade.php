@extends('layouts.appdashbord')
    @section('content')
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="d-flex justify-content-end mb-3">
                        <a href="/produit" class="btn btn-primary mr-5" style="width:200px;"><i class="fas fa-sign-in-alt fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Liste des produits</a>
                        <a href="/ajouproduit" class="btn btn-primary mr-5" style="width:200px;"><i class="fas fa-sign-in-alt fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Ajout des produits</a>
                    </div>
                <div class="container">
                    <form action="{{route('store_products')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @if($errors->any())
                                @foreach($errors->all() as $error)
                                <div class="alert alert-danger">{{$error}}</div>
                                @endforeach
                                @endif
                                <div class="row">   
                                     <h2>Veuillez ajouter de nouveaux produits</h2>
                                    <div class="form-group col-8 ">
                                        <label for="sexe" class=" " style="color:red;">Categorie</label>
                                        <div class="col-8">
                                            <select name="category_id" id="category_id" class="form-control">
                                                <option value=""></option>
                                                @foreach($categories as $key => $value)
                                                <option value="{{$key}}">{{$value}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">   
                                    <div class="form-group col-8 ">
                                        <label for="sexe" class=" " style="color:red;">Sous categorie</label>
                                        <div class="col-8">
                                            <select name="sous_category_id" id="sous_category_id" class="form-control">
                                                <option value=""></option>
                                                @foreach($sous_category as $key => $value)
                                                <option value="{{$key}}">{{$value}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-10">

                                        <label for="inputEmail" style="color:red;" class="">Nom produit<span style="background-colol:red;">*</span></span></label>
                                        <div class="col-10">
                                            <input type="text" name="name_product"  id="name_product" class="form-control" placeholder="le nom du produit">
                                        </div>
                                    </div>   
                                </div>
                                <div class="row ">
                                    <div class="form-group col-10">
                                            <label for="inputPassword" style="color:red;" class="">Prix du produit</label>
                                            <div class="col-10">
                                                <input type="text" name="prix_product" id="prix_product" class="form-control" placeholder="Le prix du produit">
                                            </div>
                                      </div>
                                </div>
                                <div class="form-group col-8 ">
                                        <label for="sexe" class=" " style="color:red;">Proprietaire</label>
                                        <div class="col-8">
                                            <select name="property_id" id="property_id" class="form-control">
                                                <option value=""></option>
                                                @foreach($properties as $key => $value)
                                                <option value="{{$key}}">{{$value}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                <div class="row">
                                    <div class="form-group col-10 ">
                                        <label for="inputPassword" style="color:red;" class=" ">Description du produit</label>
                                        <div class="col-10">
                                            <textarea name="description_product" id="description_product" cols="30" rows="3" class="form-control" placeholder="La description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-10 ">
                                        <label for="" style="color:red;" class=" ">Image du produit</label>
                                        <div class="col-10">
                                            <input type="file" name="image_product" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">         
                                    <button type="submit" style="width:150px;border-radius:5px;" class="btn btn-success">Enregistrer</button>
                                    <button type="reset" style="width:150px;border-radius:5px;" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                                </div>
                    </form>
                </div>
            
    @endsection        