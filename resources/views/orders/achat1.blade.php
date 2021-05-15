
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
    <h1>DFGHJKLCCCCCC</h1>    
    <h1 style="text-align:center; color:green">
     ACHAT RAPIDE EN TROIS CLICS</h1>
        <h2 style= "color:black">Besoin de support ? Appelez le 33 827 27 27 ou 78 147 07 17</h1>
   <div class="container">
    <form action="{{route('achat1_products')}}" method="post" enctype="multipart/form-data">
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
         <a href="{{ url('/checkout') }}"><button class="btn btn-primary">Enregistrer</button></a>
    </form> 
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