<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">

    <header class="row">
        @include('includes.header')
    </header>
    <div>
    <h1 style="text-align:center; color:#60b4df" >Bienvenue a e-qincaillerie.</h1>    
    <h1 style="text-align:center; color:#60b4df">
     ACHAT RAPIDE EN TROIS CLICS</h1>
        <h2 style="text-align:center; color:#60b4df">Besoin de support ? Appelez le 33 827 27 27 ou 78 147 07 17</h1>
   <div class="container">
    <form action="{{route('achat_products', $product->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @if($errors->any())
                @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
                @endforeach
                @endif
         <input type="text" placeholder="Nom de l'acheteur" name="nom_client" id="nom_client" class="form-control"><br>
         <input type="text" placeholder="Prenom de l'acheteur"name="prenom_client" id="prenom_client" class="form-control"  ><br>
         <input type="text" placeholder="Localisation de l'acheteur" name="Adresse_client" id="Adresse_client" class="form-control"><br>
         <input type="text" placeholder="Telephone de l'acheteur" name="num_tel" id="num_tel" class="form-control" ><br>
         <a href="/checkout"><button class="btn btn-primary">Enregistrer</button></a>
    </form> 
    </div>   
        <div class="container mt-5" style="width: 60vw">
       <div class="row align-items-start my-5">
           <div class="col-lg-5">
               <p><img class="img-fluid rounded mb-4 mb-lg-0" src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt=""></p>
               <h3 class="font-weight-light">{{$product->name_product}}</h3>
               <p>{{$product->prix_product.'F CFA' ?? ''}}</p>
               <hr>
              
           </div>
           <!-- /.col-lg-8 -->
           <div class="col-lg-7">
               <p>{!!$product->description_product!!}</p>
            
           </div>
           <!-- /.col-md-4 -->
       </div>
   </div>
       
    </div>
   
    <div id="main" class="row">

        @yield('content')

    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>
