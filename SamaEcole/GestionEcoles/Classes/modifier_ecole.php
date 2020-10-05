<?php

namespace SamaEcole\GestionEcoles\Classes;
use \PDO;
$_page_title="Modifier Ecole";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.15.0/css/mdb.min.css" rel="stylesheet">
</head>
<body>
    
<?php

include_once('etablissement.php');



?>
<?php
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');

//id
//$etablissement->id=$id;

//lire les details du produit

//if the form was submitted SamaEcole
//require_once('etablissement.php');
//$etablissement=new Etablissement();
$etablissement=new Etablissement();
$etablissement->id=$id;
$etablissement->readOne();

if(isset($_POST['bouton'])){
  //set product property values
 $etablissement->nom=$_POST['nom']; 
 $etablissement->adresse=$_POST['adresse']; 
 $etablissement->bp=$_POST['bp']; 
 $etablissement->email=$_POST['email']; 
 $etablissement->fax=$_POST['fax']; 
 $etablissement->tel=$_POST['tel']; 
 $etablissement->categorie=$_POST['categorie']; 




 //create the etablissement
 //$etablissement->create();


 
  if($etablissement->modif()){
    echo "<div class='alert alert-success'>Etablissement modifie.</div>";

  }else{
    echo "<div class='alert alert-danger'>Etablissement non modifie.</di>";
  }
}
?>
<div class="container mb-5 mt-">
  <?php
  echo "<div class='right-button-margin'>
        <a href='' class='btn btn-default pull-right'>Lire les informations</a>
      </div>";
  ?>
  
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?id={$id}");?>" method="post">

  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <button class="btn btn-md btn-outline-primary m-0 px-3 py-2 z-depth-0 waves-effect" type="button" >NOM</button>
    </div>
    <input type="text" name="nom" value="<?php  echo $etablissement->nom;?>" class="form-control" placeholder="" aria-label="Example text with button addon"
      aria-describedby="button-addon1">
  </div>

  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <button class="btn btn-md btn-outline-primary m-0 px-3 py-2 z-depth-0 waves-effect" type="button" id="button-addon1">Adresse</button>
    </div>
    <input type="text" name="adresse" value="<?php  echo $etablissement->adresse;?>" class="form-control" placeholder="" aria-label="Example text with button addon"
      aria-describedby="button-addon1">
  </div>


  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <button class="btn btn-md btn-outline-primary m-0 px-3 py-2 z-depth-0 waves-effect" type="button" id="button-addon1">BOITE POSTAL</button>
    </div>
    <input type="text" name="bp" value="<?php  echo $etablissement->bp;?>" class="form-control" placeholder="" aria-label="Example text with button addon"
      aria-describedby="button-addon1">
  </div>

  <div class="input-group mb-3">
    <div class="input-group-prepend" id="button-addon3">
      <button class="btn btn-md btn-outline-secondary m-0 px-3 py-2 z-depth-0 waves-effect" type="button">Email</button>
    </div>
    <input type="text" name="email" value="<?php  echo $etablissement->email;?>" class="form-control" placeholder="" aria-label="Example text with two button addons"
      aria-describedby="button-addon3">
  </div>

  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <button class="btn btn-md btn-outline-primary m-0 px-3 py-2 z-depth-0 waves-effect" type="button" id="button-addon1">FAX</button>
    </div>
    <input type="text" name="fax" value="<?php  echo $etablissement->fax;?>" class="form-control" placeholder="" aria-label="Example text with button addon"
      aria-describedby="button-addon1">
  </div>

  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <button class="btn btn-md btn-outline-primary m-0 px-3 py-2 z-depth-0 waves-effect" type="button" id="button-addon1">TELEPHONE</button>
    </div>
    <input type="text" name="tel" value="<?php  echo $etablissement->tel;?>"class="form-control" placeholder="" aria-label="Example text with button addon"
      aria-describedby="button-addon1">
  </div>

  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <button class="btn btn-md btn-outline-primary m-0 px-3 py-2 z-depth-0 waves-effect" type="button" id="button-addon1">CATEGORIE</button>
      
    </div>
    <input type="text" name="categorie" value="<?php  echo $etablissement->categorie;?>" class="form-control" placeholder="" aria-label="Example text with button addon"
      aria-describedby="button-addon1">
  </div>


  <button type="submit"  name="bouton" class="btn aqua-gradient btn-lg">Modifier</button>
</form>
</div>


















































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