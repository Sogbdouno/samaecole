<?php

namespace SamaEcole\GestionEcoles\Classes;
//$database=new Database();
//$db=$database->get_connexion();
//passer la connection à l'objet etablissement
//$admindao=new AdminDAO($db);
use \PDO;
//require_once('admin.class.php');
//require_once('iadmin.php');
require_once('database.php');
//require_once('admin.php');




class AdminDAO {
    
  
  private $conn;
  private $table_name="admin";

 
  public function __construct() {

   $this->conn=new Database();
   $this->conn=$this->conn->get_connexion();
  }

  public function login($email,$password) {
    if(!empty($email) && !empty($password)){
      $stmt=$this->conn->prepare("SELECT * FROM ".$this->table_name." WHERE email=? && password=? ");
      $stmt->bindParam(1,$email);
      $stmt->bindParam(2,$password);
      $stmt->execute();

      if($stmt->rowCount()==1){
        //echo "admin verifie";
        header("location:../../../dashboard/index.php");
      }else{
        echo "<div class='alert alert-danger'>Email ou mot de passe incorrect</div>";
      }

    }else{
      echo "Entrer votre email et votre mot de passe";
    }

    
  }

}










//

?>