<?php

namespace SamaEcole\GestionEcoles\Classes;

use \PDO;

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
        <a class="navbar-brand" href="#"><img src="../../../img/logo.png" alt="" class="icone" width="35%"></a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

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
            <form class="form-inline">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
            </form>
        </div>
        <!-- Collapsible content -->

    </nav>
    <!--/.Navbar-->
    <?php
    require_once('database.php');
    $database = new Database();
    $db = $database->get_connexion();

    if (isset($_POST['submit'])) {
        $search = $_POST['search'];
        $req = $db->prepare("SELECT * FROM etablissement WHERE nom='$search' ");
        $req->setFetchMode(PDO::FETCH_OBJ);
        $req->execute();
        if ($row = $req->Fetch()) {
    ?>
            <!-- <table>
                <tr>
                    <th>Nom</th>
                    <th>Telephone</th>
                </tr>
                <tr>
                    <td><?php echo $row->nom; ?></td>
                    <td><img src="<?php echo $row->logo; ?>"></td>
                </tr>
            </table> -->
            <!-- ---------------------------------------------------------------------------------------------------------------- -->
            <div class="container w-50 mb-5">
            <div class="card">

                <!-- Card image -->
                <img class="card-img-top" width="5%" src="<?php echo $row->logo; ?>" alt="Card image cap">

                <!-- Card content -->
                <div class="card-body">

                    <!-- Title -->
                    <h4 class="card-title"><a>NOM:<?php echo $row->nom; ?></a></h4>
                    <h4 class="card-title"><a>TEL:<?php echo $row->tel; ?></a></h4>
                    <h4 class="card-title"><a>ADRESSE:<?php echo $row->adresse; ?></a></h4>
                    <h4 class="card-title"><a>FAX:<?php echo $row->fax; ?></a></h4>
                    <h4 class="card-title"><a>EMAIL:<?php echo $row->email; ?></a></h4>


                </div>


                <!-- Card -->
            </div>

            </div>

    <?php

        } else {
            echo " cette ecole n'existe pas";
        }
    }

    ?>
























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