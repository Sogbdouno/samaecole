<?php
namespace SamaEcole\GestionEcoles\Classes;
use\PDO;

require_once('etablissement.php');
//require_once('modifier_ecole.php');
//require_once('categorie.php');
//recuperer la connection a la base de donnee
//$database=new Database();
//passer la connection à l'objet etablissement
//$etablissement=new Etablissement();
//$etablissement->create();
//$etablissement=new Etablissement();
//$categorie=new Categorie($db);

$page_title="CREER UNE ECOLE";
?>
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
  <a class="navbar-brand" href="#"><img src="../img/logo.png" alt="" class="icone" width="35%"></a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
      class="navbar-toggler-icon"></span></button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../../../dashboard/index.php">DASHBOARD<span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="#">Deconnexion</a>
      </li>

      

    </ul>
    <!-- Links -->

    <!-- Search form -->
    <form class="form-inline">
      <input class="form-control" type="text" placeholder="Search" aria-label="Search">
    </form>
  </div>
  <!-- Collapsible content -->

</nav>
<!--/.Navbar-->
<!-- ===================================================================================================================== -->
<!-- ===================================================================================================================== -->
<!-- =================                          CONTACT FORM         ===================================================== -->
<!-- ===================================================================================================================== -->
<!-- ===================================================================================================================== -->
<!-- ===================================================================================================================== -->
<?php
//if the form was submitted SamaEcole
//require_once('etablissement.php');
$etablissement=new Etablissement();

if(isset($_POST['bouton'])){
  //set product property values
 $etablissement->nom=$_POST['nom']; 
 $etablissement->adresse=$_POST['adresse']; 
 $etablissement->bp=$_POST['bp']; 
 $etablissement->email=$_POST['email']; 
 $etablissement->siteweb=$_POST['siteweb']; 
 $etablissement->fax=$_POST['fax']; 
 $etablissement->tel=$_POST['tel']; 
 $etablissement->logo=$_POST['logo']; 
 $etablissement->categorie=$_POST['categorie']; 

 

 //create the etablissement
 //$etablissement->create();


 
  if($etablissement->create()){
    echo "<div class='alert alert-success'>Etablissement was created.</div>";

  }else{
    echo "<div class='alert alert-danger'>Etablissement was not created.</di>";
  }
}
?>
<div class="container mb-5 mt-">
  <?php
  echo "<div class='right-button-margin'>
        <a href='' class='btn btn-default pull-right'>Lire les informations</a>
      </div>";
  ?>
  
<form action="" method="post">

  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <button class="btn btn-md btn-outline-primary m-0 px-3 py-2 z-depth-0 waves-effect" type="button" >NOM</button>
    </div>
    <input type="text" name="nom" class="form-control" placeholder="" aria-label="Example text with button addon"
      aria-describedby="button-addon1">
  </div>

  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <button class="btn btn-md btn-outline-primary m-0 px-3 py-2 z-depth-0 waves-effect" type="button" id="button-addon1">Adrese</button>
    </div>
    <input type="text" name="adresse" class="form-control" placeholder="" aria-label="Example text with button addon"
      aria-describedby="button-addon1">
  </div>


  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <button class="btn btn-md btn-outline-primary m-0 px-3 py-2 z-depth-0 waves-effect" type="button" id="button-addon1">BOITE POSTAL</button>
    </div>
    <input type="text" name="bp" class="form-control" placeholder="" aria-label="Example text with button addon"
      aria-describedby="button-addon1">
  </div>




  <div class="input-group mb-3">
    <div class="input-group-prepend" id="button-addon3">
      <button class="btn btn-md btn-outline-secondary m-0 px-3 py-2 z-depth-0 waves-effect" type="button">Email</button>
    </div>
    <input type="text" name="email" class="form-control" placeholder="" aria-label="Example text with two button addons"
      aria-describedby="button-addon3">
  </div>


  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <button class="btn btn-md btn-outline-primary m-0 px-3 py-2 z-depth-0 waves-effect" type="button" id="button-addon1">SITE</button>
    </div>
    <input type="text" name="siteweb" class="form-control" placeholder="" aria-label="Example text with button addon"
      aria-describedby="button-addon1">
  </div>

  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <button class="btn btn-md btn-outline-primary m-0 px-3 py-2 z-depth-0 waves-effect" type="button" id="button-addon1">FAX</button>
    </div>
    <input type="text" name="fax" class="form-control" placeholder="" aria-label="Example text with button addon"
      aria-describedby="button-addon1">
  </div>

  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <button class="btn btn-md btn-outline-primary m-0 px-3 py-2 z-depth-0 waves-effect" type="button" id="button-addon1">TELEPHONE</button>
    </div>
    <input type="text" name="tel" class="form-control" placeholder="" aria-label="Example text with button addon"
      aria-describedby="button-addon1">
  </div>

  

  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <button class="btn btn-md btn-outline-primary m-0 px-3 py-2 z-depth-0 waves-effect" type="button" id="button-addon1">LOGO</button>
    </div>
    <input type="text" name="logo" class="form-control" placeholder="" aria-label="Example text with button addon"
      aria-describedby="button-addon1">
  </div>

  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <button class="btn btn-md btn-outline-primary m-0 px-3 py-2 z-depth-0 waves-effect" type="button" id="button-addon1">CATEGORIE</button>
      
    </div>
    <input type="text" name="categorie" class="form-control" placeholder="" aria-label="Example text with button addon"
      aria-describedby="button-addon1">
  </div>


  <button type="submit"  name="bouton" class="btn aqua-gradient btn-lg">Creer</button>
</form>
</div>















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