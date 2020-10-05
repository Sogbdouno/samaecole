<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.15.0/css/mdb.min.css" rel="stylesheet">

</head>
<body>

 <!-- ===================================================================================================================== -->
<!-- ===================================================================================================================== -->
<!-- =================                          SEARCH AND NAVBAR         ===================================================== -->
<!-- ===================================================================================================================== -->
<!-- ===================================================================================================================== -->
<!-- ===================================================================================================================== -->    
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light blue-grey lighten-5 mb-4">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="#"><img src="img/logo.png" alt="" class="icone" width="35%"></a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
      class="navbar-toggler-icon"></span></button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Acceuil<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="SamaEcole/GestionEcoles/Classes/contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="SamaEcole/GestionEcoles/Classes/admin.php"> Connexion</a>
      </li>

      

    </ul>
    <!-- Links -->

    <!-- Search form -->
    <form class="form-inline" action="SamaEcole/GestionEcoles/Classes/search.php" method="post">
      <input class="form-control" type="text" name="search" placeholder="Search" aria-label="Search" >
      <input class="form-control" type="submit" name="submit" value="Rechercher" >
    </form>
  </div>
  <!-- Collapsible content -->

</nav>
<!--/.Navbar-->

<!-- ===================================================================================================================== -->
<!-- ===================================================================================================================== -->
<!-- =================                          CAROUSEL         ===================================================== -->
<!-- ===================================================================================================================== -->
<!-- ===================================================================================================================== -->
<!-- ===================================================================================================================== --> 
<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
    <li data-target="#carousel-example-2" data-slide-to="3"></li>
    <li data-target="#carousel-example-2" data-slide-to="4"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="img/1.jpg"
          alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">BEM</h3>
       
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="img/2.jpg"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">UCAD</h3>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="img/3.jpg"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">SUP'DECO</h3>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="img/4.jpg"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">GROUPE ISM</h3>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="img/5.jpg"
          alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">SUP'INFO</h3>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

<!-- ===================================================================================================================== -->
<!-- ===================================================================================================================== -->
<!-- =================                          BUTTON GROUP         ===================================================== -->
<!-- ===================================================================================================================== -->
<!-- ===================================================================================================================== -->
<!-- ===================================================================================================================== --> 

<div class="container">
<div class="col-md-12 mb-2 pb-2">
<form action=""  method="post">
  <button type="button" class="btn aqua-gradient" name="informatique"><i class="fas fa-desktop pr-2"></i>Informatique</button>
  <button type="button" class="btn aqua-gradient" name="management"><i class="fas fa-tasks pr-2"></i>Management</button>
  <button type="button" class="btn aqua-gradient" name="telecom"><i class="fas fa-network-wired pr-2"></i>Telecom</button>
  <button type="button" class="btn aqua-gradient" name="marketing"><<i class="fas fa-bullhorn pr-2"></i>Marketing</button>
  <button type="button" class="btn aqua-gradient" name="transport"><i class="fas fa-ship"></i>Transport et logistique</button>
   
  </form>
</div>




</div>
<!-- ===================================================================================================================== -->
<!-- ===================================================================================================================== -->
<!-- =================                          CADRES         ===================================================== -->
<!-- ===================================================================================================================== -->
<!-- ===================================================================================================================== -->
<!-- ===================================================================================================================== -->    
<!-- Card deck -->
<div class="container">
<div class="card-deck">

  <!-- Card -->
  <div class="card mb-2">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg"
        alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body mb-4">

      <!--Title-->
      <h4 class="card-title">Card title</h4>
      <!--Text-->
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
        content.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="btn btn-light-blue btn-md">Read more</button>

    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg"
        alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Card title</h4>
      <!--Text-->
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
        content.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="btn btn-light-blue btn-md">Read more</button>

    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/15.jpg"
        alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Card title</h4>
      <!--Text-->
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
        content.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="btn btn-light-blue btn-md">Read more</button>

    </div>
    
  </div>
  <!-- Card -->
  <!-- Card deck -->
<div class="card-deck">

<!-- Card -->
<div class="card mb-4">

  <!--Card image-->
  <div class="view overlay">
    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg"
      alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!--Card content-->
  <div class="card-body">

    <!--Title-->
    <h4 class="card-title">Card title</h4>
    <!--Text-->
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
      content.</p>
    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
    <button type="button" class="btn btn-light-blue btn-md">Read more</button>

  </div>

</div>
<!-- Card -->

<!-- Card -->
<div class="card mb-4">

  <!--Card image-->
  <div class="view overlay">
    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg"
      alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!--Card content-->
  <div class="card-body">

    <!--Title-->
    <h4 class="card-title">Card title</h4>
    <!--Text-->
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
      content.</p>
    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
    <button type="button" class="btn btn-light-blue btn-md">Read more</button>

  </div>

</div>
<!-- Card -->

<!-- Card -->
<div class="card mb-4">

  <!--Card image-->
  <div class="view overlay">
    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/15.jpg"
      alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!--Card content-->
  <div class="card-body">

    <!--Title-->
    <h4 class="card-title">Card title</h4>
    <!--Text-->
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
      content.</p>
    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
    <button type="button" class="btn btn-light-blue btn-md">Read more</button>

  </div>

</div>
<!-- Card -->

</div>
<!-- Card deck -->
  
</div>
</div>
<!-- Card deck -->


































<!-- ===================================================================================================================== -->
<!-- ===================================================================================================================== -->
<!-- =================                          PIED DE PAGE         ===================================================== -->
<!-- ===================================================================================================================== -->
<!-- ===================================================================================================================== -->
<!-- ===================================================================================================================== -->
<!-- Footer -->
<footer class="page-footer font-small cyan darken-3">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Grid row-->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-12 py-5">
        <div class="mb-5 flex-center">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Pinterest-->
          <a class="pin-ic">
            <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
          </a>
        </div>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->






     <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.15.0/js/mdb.min.js"></script>
</body>
</html>