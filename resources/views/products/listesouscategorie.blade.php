@extends('layouts.appdashbord')
  @section('content')
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
          @foreach($sousCategory  as $souscategory )
            <tr>
                <th>{{$souscategory->id}}</th>
                <th>{{$souscategory->name_singlecategory}}</th>
                <th>
                  <form action="listesouscategorie/{{$sousCategory->id}}" method="post">
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
   
  @endsection


