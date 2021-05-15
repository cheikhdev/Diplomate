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
  <link href="{{asset('css/reset.css')}}" rel="stylesheet" />
  <link href="{{asset('css/responsive.css')}}" rel="stylesheet" />
  <link href="{{asset('css/styleshop.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('css/magnific-popup.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/niceselect.css')}}">
  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
  <link rel="stylesheet" href="{{asset('css/animate.css')}}">
  <link rel="stylesheet" href="{{asset('css/flex-slider.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">
  <link href="{{asset('plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
  <link href="{{asset('plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
  <link href="{{asset('plugins/flag-icons/css/flag-icon.min.css')}}" rel="stylesheet"/>
  <link href="{{asset('plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
  <link href="{{asset('plugins/ladda/ladda.min.css')}}" rel="stylesheet" />
  <link href="{{asset('plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
  <link href="{{asset('plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="{{asset('css/sleek.css')}}" />

  

  <!-- FAVICON -->
  <link href="assets/img/favicon.png" rel="shortcut icon" />

  
  

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
    background-color: rgb(1, 20, 82);
    width: 100%;
    z-index: 1000;
}

.alternate{
  background-color: rgb(194, 58, 54);
  color:white;
  
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
span{
  color:black;

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

label{
  font-family: Georgia, 'Times New Roman', Times, serif;
  color:blue;
  font-weight:bold;
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
<body class=" header-fixed" id="">
  
  <!-- Navigation -->
    
    <header >
        <div class="alternate d-flex  justify-content-center align-content-center  p-2" >
              <span >
                <h3 style="font-weight:bold;color:white;">
                  Besoin d'aide pour commander ? whatsapp <span style="background:white;color:green;border-radius:60px;padding-left:5px;padding-right:5px;"><i class="fa fa-whatsapp " aria-hidden="true"></i>77 478 19 07</span>
                </h3>
              </span>  
              
        </div>
        <div class="">
          
          <div class="">
            <div class="container d-flex justify-content-around">
              <div >@include('partials.search')</div>
              <div class="nav-btn container mr-1 mt-4" > 
                <div class="nav-links" style=" " >
                  <ul style="" class="d-flex  justify-content-between w-100"> 
                    <li class="nav-link" style="">
                      <a href="/panier" class="menu" style="font-size:14px;">
                        <sup style="color:red;">{{Cart::count()}}</sup><i class="fas fa-shopping-cart fa-lg fa-fw mr-2 text-gray-400" aria-hidden="true"></i>
                        Panier
                      </a>
                    </li>
                    <li class="nav-link mt-1" >
                      <a href="#" class="menu" style="font-size:14px;">       
                        <i class="fas fa-user-circle fa-lg fa-fw mr-2 text-gray-400" aria-hidden="true"></i>
                        Compte<i class="fas fa-caret-down"></i>
                      </a>
                      <div class="dropdown">
                        <ul>
                          <li class="dropdown-link">
                            <a href="#">Profil</a>
                          </li>
                          <li class="dropdown-link">
                            <a href="#">Parametre</a>
                          </li>
                          <li class="dropdown-link">
                            @can('admin')
                              <a  href="/dashbord">Tableau de bord</a>
                            @endcan
                          </li> 
                          <li class="dropdown-link">
                            <a href="{{route('deconnect')}}">Deconnexion</a>
                          </li> 
                          <div class="arrow"></div>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-end">
              <div id="mylogo">
                <a href="/espace_client">
                  <img style="" src="{{asset('images/logo.png')}}" width="150px" height="70px">
                </a> 
              </div>
              <div class="nav-btn container mr-1 mt-4 col-12" > 
                <div class="nav-links" style=" " >
                    <ul style="" class="d-flex  justify-content-between w-100"> 
                      <div class="topbar-divider d-none d-sm-block"></div>
                          <li class="nav-link " >
                            <a href="#" class="menu" style="font-size:18px;">
                              <i class="fas fa-medkit fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>
                              Accueil
                            </a>
                          </li>
                          <li class="nav-link mr-1" >
                            <a href="#" class="menu" style="font-size:18px;">
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
                          <li class="nav-link " >
                            <a href="#" class="menu" style="font-size:18px;">
                              <i class="far fa-address-book fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>
                              Nous contacter
                            </a>
                          </li>
                          <li class="nav-link " >
                            <a href="#" class="menu" style="font-size:18px;">
                              <i class="fas fa-phone-volume fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>
                              Rappel gratuit
                            </a>
                          </li>     
                    </ul>
                </div>
              </div>
            </div> 
          </div>
          
        </div>
    </header>
  <!-- Page Content -->
    <main>
        <div class="wrapper container" style="margin-top:30px;">
              <!----- Sidebarr leftt---->
            <aside class="left-sidebar bg-sidebar w-auto" style="height:80vh;background-color:white;margin-right:30px;">
              <div id="sidebar" class="sidebar sidebar-with-footer">
                <!-- Aplication Brand -->
                
                <!-- begin sidebar scrollbar -->
                <div class="sidebar-scrollbar">

                  <!-- sidebar menu -->
                  <div class="d-flex justify-content-center" style="background-color:rgb(1, 20, 82);padding:10px;"><h3 style="color:white;">E-QUINC</h3></div>
                  <ul class="nav sidebar-inner" id="sidebar-menu"> 
                      <li  class="has-sub  active expand" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                          aria-expanded="false" aria-controls="dashboard">
                          <i class="fas fa-home "></i>
                          <span class="nav-text">Acceuil</span> <b class="caret"></b>
                        </a>  
                      </li>
                      <hr class="separator" />
                     <label for="" ><span style="color: #C0C0C0;font-size: 20px;">Catégories de produits</span></label>
                      <li  class="has-sub" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements"
                          aria-expanded="false" aria-controls="ui-elements">
                          <i class="fas fa-charging-station"></i>
                          <span class="nav-text">Electricité</span> <b class=""><i class="fas fa-caret-down"></i></b>
                        </a>
                        <ul  class="collapse"  id="ui-elements"
                          data-parent="#sidebar-menu">
                          <div class="sub-menu"> 
                            <li  class="has-sub" >
                              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#components"
                                aria-expanded="false" aria-controls="components">
                                <span class="nav-text">Eclairage</span> 
                            </li>
                              
                            <li  class="has-sub" >
                              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#icons"
                                aria-expanded="false" aria-controls="icons">
                                <span class="nav-text">Cablage</span> 
                              </a> 
                            </li>
                            <li  class="has-sub" >
                              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#forms"
                                aria-expanded="false" aria-controls="forms">
                                <span class="nav-text">Appareillage</span> 
                              </a> 
                            </li>
                            <li  class="has-sub" >
                              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#forms"
                                aria-expanded="false" aria-controls="forms">
                                <span class="nav-text">Protection</span>
                              </a> 
                            </li>
                          </div>
                        </ul>
                      </li>
                      <li  class="has-sub" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#charts"
                          aria-expanded="false" aria-controls="charts">
                          <i class="fas fa-toilet"></i>
                          <span class="nav-text">Sanitaire et Plomberie</span> <b class=""><i class="fas fa-caret-down"></i></b>
                        </a>
                        <ul  class="collapse"  id="sanplom"
                          data-parent="#sidebar-menu">
                          <div class="sub-menu">
                                <li >
                                  <a class="sidenav-item-link" href="chartjs.html">
                                    <span class="nav-text">Salle de bain</span>                            
                                  </a>
                                </li>
                                <li >
                                  <a class="sidenav-item-link" href="chartjs.html">
                                    <span class="nav-text">Robineterie</span>  
                                  </a>
                                </li> 
                          </div>
                        </ul>
                      </li>
                      <li  class="has-sub" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#charts"
                          aria-expanded="false" aria-controls="charts">
                          <i class="fab fa-buffer"></i>
                          <span class="nav-text">Maçonnerie</span> <b class=""><i class="fas fa-caret-down"></i></b>
                        </a>
                        <ul  class="collapse"  id="charts"
                          data-parent="#sidebar-menu">
                          <div class="sub-menu">
                                <li >
                                  <a class="sidenav-item-link" href="chartjs.html">
                                    <span class="nav-text">Ciment</span>                            
                                  </a>
                                </li>
                                <li >
                                  <a class="sidenav-item-link" href="chartjs.html">
                                    <span class="nav-text">Fer</span>  
                                  </a>
                                </li> 
                                <li >
                                  <a class="sidenav-item-link" href="chartjs.html">
                                    <span class="nav-text">Graviers</span>  
                                  </a>
                                </li> 
                          </div>
                        </ul>
                      </li>
                      <li  class="has-sub" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#charts"
                          aria-expanded="false" aria-controls="charts">
                          <i class="fas fa-paint-roller"></i>
                          <span class="nav-text">Peinture</span> <b class=""><i class="fas fa-caret-down"></i></b>
                        </a> 
                      </li>
                      <hr class="separator" />  
                  </ul>
                </div>   
              </div>
            </aside>
          <div class=" page-wrapper" style="width:100%;padding-top:0px;margin-top:1px;">
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
        </div>
        <div class="pt-2">
            <aside style="">
                <p style="border-bottom: 2px solid #60b4df ;font-size: 20px;color: black;"><em> Nos Cathegories.</em></p>
                  <div class="container d-flex justify-content-between">
                  <li><a style="border-bottom: 2px solid #60b4df;color: black;font-weight:bold; ">Maconnerie  <span style="background-color:#60b4df;font-size: 23px; ">45</span><a></li>
                  <li><a style="border-bottom: 2px solid #60b4df;color: black;font-weight:bold; ">Sanitaire et Plomberie  <span style="background-color:#60b4df;font-size: 23px; ">67</span></a></li>
                  <li><a style="border-bottom: 2px solid #60b4df;color: black;font-weight:bold; ">Peinture <span style="background-color:#60b4df;font-size: 23px; ">34</span></a></li>
                  <li><a style="border-bottom: 2px solid #60b4df;color: black;font-weight:bold; ">Electricite <span style="background-color:#60b4df;font-size: 23px; ">30</span></a></li>
                  </div>
              </aside>
              @yield('content')
          </div>
          <div class="container">
            <h2 style="text-align:center;padding: 20px;" class="">   Les grandes Marques vous attendent </h2>
            <div style="background-image: url({{asset('images/salle-bain.jpg')}}); height: 420px;">
                <i></i><span style="font-size: 30px; ">300<br>
                <em style="font-size: 30px;">Produits disponibles<br>
                Une large gamme de produits<br>
                disponible au meilleur prix.<em></span>
                <i></i><span style="">24h/24<br>
                Produits disponibles<br>
                Une large gamme de produits<br>
                disponible au meilleur prix.</span>
                <i></i><span style=" ">100%<br>
                <em style="font-size: 30px;">Produits disponibles<br>
                Une large gamme de produits
                disponible au meilleur prix.<em></span>
            </div>  
            <div class="container" style="top: 40px;">
              <h2 style="text-align:center;padding: 20px;">   Les grandes Marques vous attendent </h2>
            </div>
                                <!-- Footer -->
              <marquee style="background:url({{asset('images/construction.jpg')}});"> <section class="page-footer font-small mdb-color lighten-3 pt-4">
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
                </marquee>
  </main>
<!-- Footer -->
  <hr style="height:3px;border-width:0;color:gray;background-color:#60b4df">

  <div class="container-fluid" style="padding-left:0px;padding-right:0px;"> 
    <output class="bg-white shadow-sm" style="width:100%;">
   
        <footer class="section-footer border-top" style="background-color:rgb(1, 20, 82)">
            <div class="container-fluid">
                <section class="footer-top padding-y">
                    <div class="row">
                        <aside class="col-md-4">
                            <article class="mr-3"> <img style="" src="{{asset('images/logo.png')}}" width="150px" height="70px" class="logo-footer">
                              <h5 class="font-weight-bold text-uppercase mb-4" style="font-size: 35px;color: white;">E-Quinc</h5>
                                <p class="mt-3 description">Bienvenue a votre quincailerie digitale de reference .</p>
                                <div> <a class="btn btn-icon btn-light" title="Facebook" target="_blank" href="#" data-abc="true"><i class="fab fa-facebook-f"></i></a> <a class="btn btn-icon btn-light" title="Instagram" target="_blank" href="#" data-abc="true"><i class="fab fa-instagram"></i></a> <a class="btn btn-icon btn-light" title="Youtube" target="_blank" href="#" data-abc="true"><i class="fab fa-youtube"></i></a> <a class="btn btn-icon btn-light" title="Twitter" target="_blank" href="#" data-abc="true"><i class="fab fa-twitter"></i></a> </div>
                            </article>
                        </aside>
                        <aside class="col-sm-3 col-md-2">
                            <h6 class="title">About</h6>
                            <ul class="list-unstyled">
                                <li> <a href="#" data-abc="true" style="color:white;">A Propos</a></li>
                                <li> <a href="#" data-abc="true" style="color:white;">Acceuil</a></li>
                                <li> <a href="#" data-abc="true" style="color:white;">Nos  Cathegories</a></li>
                                <li> <a href="#" data-abc="true" style="color:white;">Nos Produits</a></li>
                                <li> <a href="#" data-abc="true" style="color:white;">Contacts</a></li>
                            </ul>
                        </aside>
                        <aside class="col-sm-3 col-md-2">
                            <h6 class="title">Address</h6>
                            <ul class="list-unstyled">
                                <li> <a href="#" data-abc="true" style="color:white;">DAKAR,SENEGAL</a></li>
                                <li> <a href="#" data-abc="true" style="color:white;">equinc.sn</a></li>
                                <li> <a href="#" data-abc="true" style="color:white;">+221 33 850 23 25</a></li>
                                <li> <a href="#" data-abc="true" style="color:white;">equinc@gmail.com</a></li>
                            </ul>
                        </aside>
                        <aside class="col-sm-3 col-md-2">
                            <h6 class="title">For users</h6>
                            <ul class="list-unstyled">
                                <li> <a href="#" data-abc="true" style="color:white;"> User Login </a></li>
                                <li> <a href="#" data-abc="true" style="color:white;"> User register </a></li>
                                <li> <a href="#" data-abc="true" style="color:white;"> Account Setting </a></li>
                                <li> <a href="#" data-abc="true" style="color:white;"> My Orders </a></li>
                            </ul>
                        </aside>
                        <aside class="col-sm-2 col-md-2">
                            <h6 class="title">Our app</h6> <a href="#" class="d-block mb-2" data-abc="true"><img class="img-responsive" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574317087/AAA/appstore.png" height="40"></a> <a href="#" class="d-block mb-2" data-abc="true"><img class="img-responsive" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574317110/AAA/playmarket.png" height="40"></a>
                        </aside>
                    </div>
                </section>
                <section class="footer-copyright border-top " style="background-color: rgb(194, 58, 54);">
                    <p class="float-left text-muted"> © 2020 Equinc All rights reserved </p>
                    <p target="_blank" class="float-right text-muted"> <a href="#" data-abc="true">Privacy &amp; Cookies</a> &nbsp; &nbsp; <a href="#" data-abc="true">Accessibility</a> </p>
                </section>
            </div>
        </footer>
    </output> 
  </div>
<!-- Footer -->
        


<!-- Footer -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
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

    <script src="{{asset('js/colors.js')}}"></script>
    <script src="{{asset('js/slicknav.min.js')}}"></script>
    <script src="{{asset('js/magnific-popup.js')}}"></script>
    <script src="{{asset('js/magnific-popup.js')}}"></script>
    <script src="{{asset('js/finalcountdown.min.js')}}"></script>

    <script src="{{asset('js/nicesellect.js')}}"></script>
    <script src="{{asset('js/flex-slider.js')}}"></script>
    <script src="{{asset('js/scrollup.js')}}"></script>

    <script src="{{asset('js/onepage-nav.min.js')}}"></script>
    <script src="{{asset('js/easing.js')}}"></script>

</body>

</html>