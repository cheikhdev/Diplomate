<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> E-Commerce </title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('css/app.css')}}" rel="stylesheet" />
  <link href="{{asset('css/all.css')}}" rel="stylesheet" />
  

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rancho&effect=fire-animation|3d-float|neon|canvas-print">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,900" rel="stylesheet" />
 <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>
<style type="text/css">
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');



ul{
    list-style: none;
}
ul li{
  text-decoration: none;

}
a{
    text-decoration: none;

}

header{
    position: sticky;
    top: 0px;
    background-color: #60b4df;
    width: 100%;
    z-index: 1000;
}





.nav-btn{
    flex: 3;
    display: flex;

}

.nav-links{
    flex: 2;
}

.log-sign{
    display: flex;
    justify-content: center;
    align-items: center;
    flex: 1;
}



.btn{
    display: inline-block;
    padding: 8px 13px;
    font-size: .8rem;
    border: 2px solid #fff;
    border-radius: 2rem;
    line-height: 1;
    margin: 0 .2rem;
    transition: .3s;
    text-transform: uppercase;
}

.btn.solid, .btn.transparent:hover{
    background-color: #fff;
    color: #69bde7;
}

.btn.transparent, .btn.solid:hover{
    background-color: transparent;
    color: #fff;
}

.nav-links > ul{
    display: flex;
    justify-content: center;
    align-items: center;
}

.nav-link{
    position: relative;
}

.nav-link > a{
    line-height: 3rem;
    color: #fff;
    padding: 0 .8rem;
    letter-spacing: 1px;
    font-size: .95rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    transition: .5s;
}

.nav-link > a > i{
    margin-left: .2rem;
}

.nav-link:hover > a{
    transform: scale(1.1);
}

.dropdown{
    position: absolute;
    top: 100%;
    left: 0;
    width: 10rem;
    transform: translateY(10px);
    opacity: 0;
    pointer-events: none;
    transition: .5s;
}

.dropdown ul{
    position: relative;
}

.dropdown-link > a{
    display: flex;
    background-color: #fff;
    color: #3498db;
    padding: .5rem 1rem;
    font-size: .9rem;
    align-items: center;
    justify-content: space-between;
    transition: .3s;
}

.dropdown-link:hover > a{
    background-color: #3498db;
    color: #fff;
}

.dropdown-link:not(:nth-last-child(2)){
    border-bottom: 1px solid #efefef;
}

.dropdown-link i{
    transform: rotate(-90deg);
}

.arrow{
    position: absolute;
    width: 11px;
    height: 11px;
    top: -5.5px;
    left: 32px;
    background-color: #fff;
    transform: rotate(45deg);
    cursor: pointer;
    transition: .3s;
    z-index: -1;
}

.dropdown-link:first-child:hover ~ .arrow{
    background-color: #3498db;
}

.dropdown-link{
    position: relative;
}

.dropdown.second{
    top: 0;
    left: 100%;
    padding-left: .8rem;
    cursor: pointer;
    transform: translateX(10px);
}

.dropdown.second .arrow{
    top: 10px;
    left: -5.5px;
}

.nav-link:hover > .dropdown,
.dropdown-link:hover > .dropdown{
    transform: translate(0, 0);
    opacity: 1;
    pointer-events: auto;
}

.hamburger-menu-container{
    flex: 1;
    display: none;
    align-items: center;
    justify-content: flex-end;
}

.hamburger-menu{
    width: 2.5rem;
    height: 2.5rem;
    display: flex;
    align-items: center;
    justify-content: flex-end;
}

.hamburger-menu div{
    width: 1.6rem;
    height: 3px;
    border-radius: 3px;
    background-color: #fff;
    position: relative;
    z-index: 1001;
    transition: .5s;
}

.hamburger-menu div:before,
.hamburger-menu div:after{
    content: '';
    position: absolute;
    width: inherit;
    height: inherit;
    background-color: #fff;
    border-radius: 3px;
    transition: .5s;
}

.hamburger-menu div:before{
    transform: translateY(-7px);
}

.hamburger-menu div:after{
    transform: translateY(7px);
}

#check{
    position: absolute;
    top: 50%;
    right: 1.5rem;
    transform: translateY(-50%);
    width: 2.5rem;
    height: 2.5rem;
    z-index: 90000;
    cursor: pointer;
    opacity: 0;
    display: none;
}

#check:checked ~ .hamburger-menu-container .hamburger-menu div{
    background-color: transparent;
}

#check:checked ~ .hamburger-menu-container .hamburger-menu div:before{
    transform: translateY(0) rotate(-45deg);
}

#check:checked ~ .hamburger-menu-container .hamburger-menu div:after{
    transform: translateY(0) rotate(45deg);
}

@keyframes animation{
    from{
        opacity: 0;
        transform: translateY(15px);
    }
    to{
        opacity: 1;
        transform: translateY(0px);
    }
}

@media (max-width: 920px){
    .hamburger-menu-container{
        display: flex;
    }

    #check{
        display: block;
    }

    .nav-btn{
        position: fixed;
        height: calc(100vh - 3rem);
        top: 3rem;
        left: 0;
        width: 100%;
        background-color: #69bde7;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        overflow-x: hidden;
        overflow-y: auto;
        transform: translateX(100%);
        transition: .65s;
    }

    #check:checked ~ .nav-btn{
        transform: translateX(0);
    }

    #check:checked ~ .nav-btn .nav-link,
    #check:checked ~ .nav-btn .log-sign{
        animation: animation .5s ease forwards var(--i);
    }

    .nav-links{
        flex: initial;
        width: 100%;
    }

    .nav-links > ul{
        flex-direction: column;
    }

    .nav-link{
        width: 100%;
        opacity: 0;
        transform: translateY(15px);
    }

    .nav-link > a{
        line-height: 1;
        padding: 1.6rem 2rem;
    }

    .nav-link:hover > a{
        transform: scale(1);
        background-color: #50a9d6;
    }

    .dropdown, .dropdown.second{
        position: initial;
        top: initial;
        left: initial;
        transform: initial;
        opacity: 1;
        pointer-events: auto;
        width: 100%;
        padding: 0;
        background-color: #3183ac;
        display: none;
    }
    
    .nav-link:hover > .dropdown,
    .dropdown-link:hover > .dropdown{
        display: block;
    }

    .nav-link:hover > a > i,
    .dropdown-link:hover > a > i{
        transform: rotate(360deg);
    }

    .dropdown-link > a{
        background-color: transparent;
        color: #fff;
        padding: 1.2rem 2rem;
        line-height: 1;
    }

    .dropdown.second .dropdown-link > a{
        padding: 1.2rem 2rem 1.2rem 3rem;
    }

    .dropdown.second .dropdown.second .dropdown-link > a{
        padding: 1.2rem 2rem 1.2rem 4rem;
    }

    .dropdown-link:not(:nth-last-child(2)){
        border-bottom: none;
    }

    .arrow{
        z-index: 1;
        background-color: #69bde7;
        left: 10%;
        transform: scale(1.1) rotate(45deg);
        transition: .5s;
    }

    .nav-link:hover .arrow{
        background-color: #50a9d6;
    }

    .dropdown .dropdown .arrow{
        display: none;
    }

    .dropdown-link:hover > a{
        background-color: #3a91bd;
    }

    .dropdown-link:first-child:hover ~ .arrow{
        background-color: #50a9d6;
    }

    .nav-link > a > i{
        font-size: 1.1rem;
        transform: rotate(-90deg);
        transition: .7s;
    }

    .dropdown i{
        font-size: 1rem;
        transition: .7s;
    }

    .log-sign{
        flex: initial;
        width: 100%;
        padding: 1.5rem 1.9rem;
        justify-content: flex-start;
        opacity: 0;
        transform: translateY(15px);
    }
   
}
</style>
<body>

  <!-- Navigation -->
    
    <header >
        <div class="d-flex  justify-content-between w-100 p-10" style="padding:10px;">
          <div id="mylogo">
            <img style="" src="{{asset('images/logo.png')}}" width="150px" height="70px">
          </div>
          @include('partials.search')
        </div>
        
        <div class="nav-btn container" >
                
                <div class="nav-links" style=" " >
                    <ul style="" class="d-flex  justify-content-between w-100"> 
                      <div class="topbar-divider d-none d-sm-block"></div>   
                        <li class="nav-link" style="">
                            <a href="/home" class="menu">
                            <i class="fas fa-home fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>
                              Accueil
                            </a>
                        </li>
                        
                          <li class="nav-link" style="">
                            <a href="#" class="menu">
                              <i class="fas fa-medkit fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>
                              A Propos<i class="fas fa-caret-down"></i>
                            </a>
                            <div class="dropdown " style="width:300px;" >
                                <ul style="width:100%;">
                                    <li class="dropdown-link">
                                        <a href="#">Mention légale</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="#">Conditions générales de vente</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="#">Contact<i class="fas fa-caret-down"></i></a>
                                    </li>
                                   
                                </ul>
                            </div>
                          </li>
                          <div class="topbar-divider d-none d-sm-block"></div>
                          <li class="nav-link" style="">
                            <a href="#" class="menu">
                              <i class="fas fa-wrench fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>
                              Categories de produits<i class="fas fa-caret-down"></i>
                            </a>
                            <div class="dropdown" style="width:300px;">
                                <ul>
                                    @foreach($categories as $category)
                                    <li class="dropdown-link">
                                    <a class="nav-link" href="{{route('produit_par_cat',['id'=>$category->id])}}">{{$category->name_category}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                                    
                            </div>
                          </li>
                          <div class="topbar-divider d-none d-sm-block"></div>
                  <a href="#" class="text">panier <span class="badge badge-pill badge-dark"></span></a>
                        <li>
                          <a href="/login" class="btn btn-success"> <i class="fas fa-user-lock fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Connexion</a>
                        </li>
                        <li>
                          <a href="" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> <i class="fas fa-sign-in-alt fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Inscription</a>
                        </li>
                    </ul>
                </div>
        </div>
    </header>
   @if (session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
  @endif

  @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
  @endif

  @if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul class="mb-0 mt-0">
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
  @endif



    @if (request()->input('q'))
    <h4 style="font-size: 24px;border: 3px solid #60b4df;background-color:white;text-align: center;"><span style="color: #60b4df;">{{ $products->total() }} résultat(s) pour la recherche "{{ request()->q }}"</span></h4>
  @endif
  <!-- Page Content -->
    <main>
          <div class="w-auto">
            <div class="" style="width:100%;height:65vh;">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="second-slide animated zoomInDown d-none d-md-block" src="{{asset('images/materiel3.jpg')}}" style="height:65vh; width:100%;" alt="">
                    <div class="container">
                      <div class="carousel-caption d-none d-md-block">
                        <h1 class="animated fadeInDown" style="color: #ffffff;">Poduits de La marque Inco.</h1>
                        <p class="animated fadeInRight" style="color: #ffffff;">Retrouvez d'excellent produit de la marque Inco , ches nos magasins .</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="second-slide animated zoomInDown d-none d-md-block" src="{{asset('images/materiel2.jpg')}}" style="height:65vh; width:100%;" alt="">
                    <div class="container">
                      <div class="carousel-caption d-none d-md-block">
                        <h1 class="animated fadeInDown" style="color: #ffffff;">Poduits de La marque Inco.</h1>
                        <p class="animated fadeInRight" style="color: #ffffff;">Retrouvez d'excellent produit de la marque Inco , ches nos magasins .</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="second-slide animated zoomInDown d-none d-md-block" src="{{asset('images/construction-material.jpeg')}}" alt="" style="height:65vh; width:100%;">
                    <div class="container">
                      <div class="carousel-caption d-none d-md-block">
                        <h1 class="animated fadeInDown" style="color: #ffffff;">Poduits de La marque Inco.</h1>
                        <p class="animated fadeInRight" style="color: #ffffff;">Retrouvez d'excellent produit de la marque Inco , ches nos magasins .</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="second-slide animated zoomInDown d-none d-md-block" src="{{asset('images/marque6.jpg')}}" alt="" style="height:65vh; width:100%;">
                    <div class="container">
                      <div class="carousel-caption d-none d-md-block">
                        <h1 class="animated fadeInDown" style="color: #ffffff;">Poduits de La marque Inco.</h1>
                        <p class="animated fadeInRight" style="color: #ffffff;">Retrouvez d'excellent produit de la marque Inco , ches nos magasins .</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="second-slide animated zoomInDown" src="{{asset('images/materiaux_const.jpg')}}" alt="" style="height:65vh; width:100%;">
                    <div class="container">
                      <div class="carousel-caption d-none d-md-block">
                        <h1 class="animated fadeInDown" style="color: #ffffff;">Poduits de La marque Inco.</h1>
                        <p class="animated fadeInRight" style="color: #ffffff;">Retrouvez d'excellent produit de la marque Inco , ches nos magasins .</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                      </div>
                    </div>
                  </div>
                </div>
                  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
              </div>
            </div>
          </div>
          <div class="pt-5">
              @yield('content')
          </div>
  </main>
      <div class="row" >
            @foreach($products as $product)
              <div class=" col-lg-2 col-sm-3  portfolio-item">
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
     
       <!--fin modall inscription-->
    <div class="container">
  <h2 style="text-align:center;padding: 20px;" class="">   Les grandes Marques vous attendent </h2>

       <!-- Footer -->
<section class="page-footer font-small mdb-color lighten-3 pt-4">

  <!-- Footer Elements -->
  <div class="container">

    <!--Grid row-->
    <div class="row">

      <!--Grid column-->
      <div class="col-lg-2 col-md-12 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="{{asset('images/marque7.png')}}" class="img-fluid"
            alt="" >
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="{{asset('images/marque6.jpg')}}" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="{{asset('images/marque4.png')}}" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-12 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="{{asset('images/marque3.jpg')}}" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="{{asset('images/marque2.png')}}" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="{{asset('images/marque1.jpg')}}" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->

  </div>
  <!-- Footer Elements -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<!-- Footer -->
  <hr style="height:3px;border-width:0;color:gray;background-color:#60b4df">

<footer class="page-footer font-small mdb-color lighten-3 pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mb-4" style="font-size: 35px;">E-Quinc</h5>
        <p style="font-size: 23px;font-weight: bold;">Bienvenue a votre quincailerie digitale de reference .</p>
        

      </div>
      <!-- Grid column -->

      <hr style="border-left: 3px solid #60b4df ;height: 350px;position: absolute;left: 5%;margin-left: -3px;top: 200">


      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mb-4" style="font-size: 33px;">A Propos</h5>

        <ul class="list-unstyled">
          <li>
            <p style="font-size: 20px;">
              <a href="#!">Acceuil</a>
            </p>
          </li>
          <li>
            <p style="font-size: 20px;">
              <a href="#!">Nos  Cathegories</a>
            </p>
          </li>
          <li>
            <p style="font-size: 20px;">
              <a href="#!">Nos Produits</a>
            </p>
          </li>
          <li>
            <p style="font-size: 20px;">
              <a href="#!">Contact</a>
            </p>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr style="border-left: 3px solid #60b4df ;height: 350px;position: absolute;left: 95%;margin-left: -3px;top: 290">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Contact details -->
        <h5 class="font-weight-bold text-uppercase mb-4" style="font-size: 35px;">Address</h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <i class="fas fa-home mr-3"></i> <span style="font-size:20px; font-weight: bold;"> DAKAR,SENEGAL <span/></p>
          </li>
          <li>
            <p>
              <i class="fas fa-envelope mr-3"></i><span style="font-size:20px;font-weight: bold;">   info@example.com <span/></p>
          </li>
          <li>
            <p style="font-size: color:8px;">
              <i class="fas fa-phone mr-3"></i><span style="font-size:20px;font-weight: bold;"> +221 33 XXX XX XX <span/></p>
          </li>
          <li>
            <p style="font-size: color:8px;">
              <i class="fas fa-print mr-3"></i><span style="font-size:20px;font-weight: bold;"> +221 33 XXX XX XX<span/></p>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

        <!-- Social buttons -->
        <h5 class="font-weight-bold text-uppercase mb-4" style="font-size: 31px;">Follow Us</h5>

        <!-- Facebook -->
        <a type="button" class="btn-floating btn-fb" style="font-size: 39px;">
          <i class="fab fa-facebook-f" style="color: #60b4df;"></i>
        </a>
        <!-- Twitter -->
        <a type="button" class="btn-floating btn-tw" style="font-size: 39px;">
          <i class="fab fa-twitter" style="color: #60b4df;"></i>
        </a>
        <!-- Google +-->
        <a type="button" class="btn-floating btn-gplus" style="font-size: 39px;">
          <i class="fab fa-google-plus-g" style="color: red;"></i>
        </a>
        <!-- Dribbble -->
        

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3"><span style="color: #60b4df; font-size: 24px;">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> QuincEnLigne.com</a><span/>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
        


<!-- Footer -->
  <!-- Bootstrap core JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  
    <script src="{{asset('js/app.js')}}"></script>  
    <script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <!-- Plugins js -->
    <script src="{{asset('js/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('js/active.js')}}"></script>
    <script src="{{asset('js/footer.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/datatables-demo.js')}}"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>

</body>

</html>