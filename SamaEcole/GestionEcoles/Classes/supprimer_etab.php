<?php
namespace SamaEcole\GestionEcoles\Classes;
require_once('etablissement.php');
$etablissement=new Etablissement();
$etablissement->id=$_POST['object_id'];

//supprimer etablissement
if($etablissement->supp()){
    echo "Etablissement supprimer";
}else{
    echo "etablissement non supprimer";
}


?>