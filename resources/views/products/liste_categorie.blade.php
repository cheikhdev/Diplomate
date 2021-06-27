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
          @foreach($Category as $category)
            <tr>
                <th>{{$category->id}}</th>
                <th>{{$category->name_category}}</th>
                <th>
                  <form action="listecategorie/{{$category->id}}" method="post">
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

