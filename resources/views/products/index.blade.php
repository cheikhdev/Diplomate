@extends('layouts.appdashbord')
  @section('content')
    <div class="table-responsive">
      <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            
            <th>Nom Produit</th>
            <th>Prix Produit</th>
            <th>Image </th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $product)
            <tr>
                
                <th>{{$product->name_product}}</th>
                <th>{{$product->prix_product}} {{ $product->category->name ?? '' }}</th>
                <th><img style="width:80px;height:70px;" src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="" width="100"></th>
                <th> 
                  <a href="{{route('editer_produit',['id'=>$product->id])}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                </th>
                <th>
                  <form action="product/{{$product->id}}" method="post">
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
