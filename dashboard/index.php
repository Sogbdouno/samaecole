<?php
namespace  SamaEcole\GestionEcoles\Classes;
use \PDO;
// page given in URL parameter, default page is one
$page = isset($_GET['page']) ? $_GET['page'] : 1;

//set number of records page
$records_per_page = 11;

//calculate for the query LIMIT CLAUSE
$from_record_num = ($records_per_page * $page) - $records_per_page;

//include database and object files
require_once('../SamaEcole/GestionEcoles/Classes/database.php');
require_once('../SamaEcole/GestionEcoles/Classes/etablissement.php');
//require_once('../SamaEcole/GestionEcoles/Classes/modifier_ecole.php');
//require_once('../SamaEcole/GestionEcoles/Classes/categorie.php');
//instatiate database and objects
$database=new Database();
$db=$database->get_connexion();
//passer la connection à l'objet etablissement
$etablissement=new Etablissement($db);
//$categorie=new Categorie($db);
//les requettes etablissements
$stmt=$etablissement->readALL($from_record_num, $records_per_page);
$num = $stmt->rowCount();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <input type="checkbox" id="ch">
    <label for="ch">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cl"></i>
    </label>
    <!-- ************************************************************** -->
    <!-- ************************************************************** -->
    <!-- ******************* SIDEBAR              ******************** -->
    <!-- ************************************************************** -->
    <!-- ************************************************************** -->
    <div class="sidebar">
        <header>CPANEL</header>
        <ul>
            <li><a href="#"><i class="fas fa-qrcode"></i>Dashboard</a></li>
            <li><a href="ajoutAdmin.php"><i class="fas fa-users"></i>Utilisateurs</a></li>
            <li><a href="../SamaEcole/GestionEcoles/Classes/gestion_ecoles_DAO.php"><i class="fas fa-school"></i>Ecole</a></li>
            <!-- <li><a href=""><i class="fas fa-sliders-h"></i>Services</a></li> -->
            <li><a href="../SamaEcole/GestionEcoles/Classes/deconnexion.php"><i class="fas fa-sign-out-alt"></i>Deconnexion</a></li>
            <i class="fas "></i>
        </ul>
    </div>
    <!-- ************************************************************** -->
    <!-- ************************************************************** -->
    <!-- *******************    CHIFFRES DU SITE   ******************** -->
    <!-- ************************************************************** -->
    <!-- ************************************************************** -->


    <div class="im">
        <!-- WElCOME MESSAGE -->
        <div class="btn welcome bg-success">
            <h1 class="text-white text-center">BIENVENUE SUR LE CPANEL DE SAMA_ECOLE</h1>
        </div>

        <!-- /////////////////// INFOS GENERAL ///////////////////////////// -->
        <div class="container  mt-5">
            <div class="card-columns chiffre ">
                <div class="card bg-primary text-white w text-center p-3">
                    <div><i class="fas fa-user-shield fa-3x"></i></div>
                    <blockquote class="blockquote mb-0">
                        <h1><strong>6</strong></h1>
                        <footer class="blockquote-footer text-white">
                            <small>
                                Administratreurs <cite title="Source Title"></cite>
                            </small>
                        </footer>
                    </blockquote>
                </div>



                <div class="card bg-danger w text-white text-center p-3">
                    <div><i class="fas fa-school fa-3x"></i></div>
                    <blockquote class="blockquote mb-0">
                        <h1><strong>20</strong></h1>
                        <footer class="blockquote-footer text-white">
                            <small>
                                Ecoles <cite title="Source Title">populaires</cite>
                            </small>
                        </footer>
                    </blockquote>
                </div>



                <div class="card bg-success w text-white text-center p-3">
                    <div><i class="fas fa-users fa-3x"></i></div>
                    <blockquote class="blockquote mb-0">
                        <h1 class=""> <strong>147</strong> </h1>
                        <footer class="blockquote-footer text-white">
                            <small>
                                Visiteurs <cite title="Source Title"></cite>
                            </small>
                        </footer>
                    </blockquote>
                </div>

            </div>
            <!--foratou   -->
            <!-- div container -->
        </div>
        <!-- ************************************************************** -->
        <!-- ************************************************************** -->
        <!-- *******************  INFOS SUR LES ADMINS ******************** -->
        <!-- ************************************************************** -->
        <!-- ************************************************************** -->
        <div class="container">
            <div class="row">
                


                <!-- <div class="col-sm-6"> -->
                    <table class="table">
                        <thead>
                            <tr class="bg-light">
                                <th><i class="fas fa-school"></i> ECOLES</th>
                                <th></th>
                                <th></th>
                                <th><a href="../SamaEcole/GestionEcoles/Classes/gestion_ecoles_DAO.php" class=""><i class="fas fa-tools"></i> GERER</a></th>
                            </tr>
                        </thead>
                        <?php
                        if($num>0){
                            echo "<table class='table table-hover table-responsive table-bordered'>";
                                echo "<tr>";
                                     echo "<th>ECOLES</th>";
                                     echo "<th>ADRESSE</th>";
                                     echo "<th>BOITE POSTAL</th>";
                                     echo "<th>EMAIL</th>";
                                     //echo "<th>SITEWEB</th>";
                                     echo "<th>FAX</th>";
                                     echo "<th>TEL</th>";
                                     //echo "<th>LOGO</th>";
                                     echo "<th>CATEGORIES</th>";
                                     echo "<th>Actions</th>";
                                echo "</tr>";
  
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
  
                                    extract($row);
  
                                    echo "<tr>";
                                        echo "<td>{$nom}</td>";
                                        echo "<td>{$adresse}</td>";
                                        echo "<td>{$bp}</td>";
                                        echo "<td>{$email}</td>";
                                        echo "<td>{$fax}</td>";
                                        echo "<td>{$tel}</td>";
                                        echo "<td>{$categorie}</td>";
                
                                        echo "<td>";
                                            // read one, edit and delete button will be here
                                            echo "
  
                                                 <a href='../SamaEcole/GestionEcoles/Classes/modifier_ecole.php?id={$id}' class='btn btn-info left-margin'>
                                                 <span class='glyphicon glyphicon-edit fas fa-edit' ></span> 
                                                 </a>
  
                                                 <a delete-id='{$id}' class='btn btn-danger delete-object'>
                                                 <span class='glyphicon glyphicon-remove fas fa-trash-alt' ></span> 
                                                 </a>";

                                        echo "</td>";
  
                                     echo "</tr>";

  
                                }
  
                             echo "</table>";
            
  
                             // paging buttons will be here
                        }
  
                        // tell the user there are no products
                        else{
                             echo "<div class='alert alert-info'>pas d'ecoles trouves .</div>";
                        }
                    
                        ?>
                    </table>
            </div>
            <!-- </div> -->
        <!-- container tables -->
        </div>
<!-- last div -->
    </div>

























       


















































       


   














































































<script>
// JavaScript for deleting product
$(document).on('click', '.delete-object', function(){
  
    var id = $(this).attr('delete-id');
  
    bootbox.confirm({
        message: "<h4>Are you sure?</h4>",
        buttons: {
            confirm: {
                label: '<span class="glyphicon glyphicon-ok"></span> Yes',
                className: 'btn-danger'
            },
            cancel: {
                label: '<span class="glyphicon glyphicon-remove"></span> No',
                className: 'btn-primary'
            }
        },
        callback: function (resultat) {
  
            if(resultat==true){
                $.post('supprimer_etab.php', {
                    object_id: id
                }, function(data){
                    location.reload();
                }).fail(function() {
                    alert('Unable to delete.');
                });
            }
        }
    });
  
    return false;
});
</script>


        <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>

</html>