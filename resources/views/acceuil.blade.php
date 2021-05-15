@extends('layouts.app')
    @section('content')
            <div class="row"style="padding:20px; width: 100%; height: auto;">
            @foreach($products as  $singleCategory)
              <div class="col-lg-2 col-sm-7 portfolio-item">
                <div class="card h-100" >
                    <a href="#"><a href="/produit/{{$product->id}}/show"><img class="card-img-top" src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}"    alt=""></a></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="/produit/{{$product->id}}/show">{{$product->name_product}}  </a>
                        </h4>
                        <p class="card-text">{!! \Illuminate\Support\Str::words($product->description_product, 25,'....')  !!}</p>
                    </div>
                    <form action="#" id="{{'product_'.$product->id}}" class="add-to-cart">
                      @csrf
                      <input type="hidden" name="id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
                      <input type="hidden" name="product_id" value="{{$product->id}}">
                      <input type="hidden" name="prix_product" value="{{$product->prix_product}}">
                      <button type="submit" class="btn btn-primary btn-fancy" href="/produit/{{$product->id}}/show">Ajouter au panier</button>
                    </form>
                    <div class="card-footer">
                      <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                    </div> 
                </div>
              </div>
            @endforeach
          </div>
    @endsection