@extends('layouts.appdashbord')
  @section('content')
    <div class="table-responsive">
      <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID Proprietaire</th>
            <th>Proprietaire</th>
            <th>Supprimer</th>
          </tr>
        </thead>
        <tbody>
          @foreach($Property as $property)
            <tr>
                <th>{{$property->id}}</th>
                <th>{{$property->name_property}}</th>
                <th></th>
                <th>
                  <form action="liste-vendeur/{{$property->id}}" method="post">
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

