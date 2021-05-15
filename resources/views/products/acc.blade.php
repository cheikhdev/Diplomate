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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rancho&effect=fire-animation|3d-float|neon|canvas-print 	
">
  <!-- Custom styles for this template -->
  
  
 

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
    <button type="button" class="btn btn-warning"> <a id ="titre"class="navbar-brand " href="#"><span class="font-effect-fire-animation">    Bienvenue à la plateforme de produits Hi Tech </span></a></button>
      <button type="button" class="btn btn-primary">Acceuil</button>
      <button type="button" class="btn btn-secondary">Nos services</button>
      <button type="button" class="btn btn-success">Contactez-nous</button>
     
      
        </ul>
      </div>
    </div>
  </nav>
  
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
        <h1>  </h1><br>
        <h1 id="h1"class="my-5  mx-2  "> HITECH SHOPPING</h1>
        <div class="list-group">
          <a href="{{ url('/agri') }}" class="list-group-item">Agriculture</a>
          <a href="{{ url('/sante') }}" class="list-group-item">SANTE</a>
          <a href="{{ url('/elec') }}" class="list-group-item">ELECTRONIQUE</a>
          <a href="{{ url('/tele') }}" class="list-group-item">TELECOMS</a>
          <a href="{{ url('/sport') }}" class="list-group-item">SPORT</a>
          
        </div>

      </div>
      
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">
    
        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
            
          </ol>
          
        <div id="image">
          
              <img class="d-block img-fluid" src="{{URL::asset('/images/sport1.jpg')}}" alt="Eight slide" width="900" height="350">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="{{URL::asset('/images/sport2.jpg')}}" alt="Ninth slide" width="900" height="350">
            </div>
            
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">
 <h1>   HITECH SHOPPING </h1> <br>
 <p> HITECH SHOPPING , EST UNE BOUTIQUE EN LIGNE QUI VOUS PERMET <BR>
     DE CONNAITRE ET DE TROUVER LES NOUVEAUX PRODUITS HITECH <BR>
     DU MARCHE . POUR ETRE PLUS EXPLICITE , CETTE A POUR OBJECTIF DE PARTICPER <BR>
     A LA TRANSFORMATION DIGITALE EN DIVULGANT LES NOUVEAUX PRODUITS HITECH .
     PAR RAPPORT AU CINQ (5) DOMAINES QUI SONT : <br>
     1 )  AGRICULTURE ; <br>
     1 )  TELECOMS; <br>
     1 )  SANTE ; <br>
     1 )  ELECTRONIQUE ; <br>
     1 )  SPORT . <br>
     
     
     
     
    </p>







<!-- Footer -->
<div class="page-footer font-small blue-grey lighten-5">

  <div style="background-color: #21d192;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Retrouvez-nous sur les reseaux sociaux!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic" >
            <i class="fa fa-facebook"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class=" 	fa fa-youtube"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fa fa-google-plus"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class=" fa fa-linkedin-square"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fa fa-instagram size-200px"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3 dark-grey-text">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold font-size-60px">Groupe E-Materiels</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p> Merci d'avoir visiter a notre site Pour plus d'informations  a propos de e-materiels , 
          Veuillez nous contactez  .</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Nos Produits</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a class="dark-grey-text" href="{{ url('/agri') }}">Agricole</a>
        </p>
        <p>
          <a class="dark-grey-text" href="{{ url('/sante') }}">Medical</a>
        </p>
        <p>
          <a class="dark-grey-text" href="{{ url('/sport') }}">Sport</a>
        </p>
        <p>
          <a class="dark-grey-text" href="{{ url('/tele') }}">TELECOMS</a>
        </p>
        <p>
          <a class="dark-grey-text" href="{{ url('/elec') }}">ELECTRONIQUE</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Liens Utiles</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a class="dark-grey-text" href="#!">Votre Compte</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">Devenir Partenaire</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">Nos Partenaires</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">Aide</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contacts</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fa fa-map-marker"></i> DAKAR</p>
        <p>
          <i class="fa fa-envelope-o"></i> e-materiels@gmail.com</p>
        <p>
          <i class="fa fa-tablet"></i> + 01 234 567 88</p>
        <p>
          <i class="fa fa-tablet"></i> + 01 234 567 89</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  
  <!-- Copyright -->

</div>
<section id="lab_social_icon_footer">
<!-- Include Font Awesome Stylesheet in Header -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
        <div class="text-center center-block">
                <a href="https://www.facebook.com/bootsnipp"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
	            <a href="https://twitter.com/bootsnipp"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href="https://plus.google.com/+Bootsnipp-page"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
	            <a href="mailto:#"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
    </div>
</div>
<style>
  #lab_social_icon_footer {
  padding: 40px 0;
  background-color: #dedede;
}

#lab_social_icon_footer a {
  color: #333;
}

#lab_social_icon_footer .social:hover {
  -webkit-transform: scale(1.1);
  -moz-transform: scale(1.1);
  -o-transform: scale(1.1);
}

#lab_social_icon_footer .social {
  -webkit-transform: scale(0.8);
  /* Browser Variations: */
  
  -moz-transform: scale(0.8);
  -o-transform: scale(0.8);
  -webkit-transition-duration: 0.5s;
  -moz-transition-duration: 0.5s;
  -o-transition-duration: 0.5s;
}
/*
    Multicoloured Hover Variations
*/

#lab_social_icon_footer #social-fb:hover {
  color: #3B5998;
}

#lab_social_icon_footer #social-tw:hover {
  color: #4099FF;
}

#lab_social_icon_footer #social-gp:hover {
  color: #d34836;
}

#lab_social_icon_footer #social-em:hover {
  color: #f39c12;
}
</style>

</section>
<!-- Footer -->
  <!-- Bootstrap core JavaScript -->
    
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="{{asset('js/app.js')}}"></script>
      <script src="{{asset('js/bootstrap.js')}}"></script>
     

</body>

</html>
