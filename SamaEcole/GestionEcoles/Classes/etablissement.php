<?php
namespace SamaEcole\GestionEcoles\Classes;
use \PDO;
require_once('database.php');
class Etablissement{
    //database connection and table
    private $conn;
    private $table_name="etablissement";
    //les attributs
    public $id;
    public $nom;
    public $adresse;
    public $bp;
    public $email;
    public $siteweb;
    public $fax;
    public $tel;
    public $logo;
    public $categorie;
    //getter et setter


    public function __construct(){
        $this->conn=new Database();
        $this->conn=$this->conn->get_connexion();
    }
    //create ecole
     public function create(){
        //la requette
        //$requette=;
        $stmt=$this->conn->prepare("INSERT INTO ".$this->table_name."(nom,adresse,bp,email,siteweb,fax,tel,logo,categorie) VALUES(:nom,:adresse,:bp,:email,:siteweb,:fax,:tel,:logo,:categorie)");
        //posted values
        $this->nom=htmlspecialchars(strip_tags($this->nom));
        $this->adresse=htmlspecialchars(strip_tags($this->adresse));
        $this->bp=htmlspecialchars(strip_tags($this->bp));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->siteweb=htmlspecialchars(strip_tags($this->siteweb));
        $this->fax=htmlspecialchars(strip_tags($this->fax));
        $this->tel=htmlspecialchars(strip_tags($this->tel));
        $this->logo=htmlspecialchars(strip_tags($this->logo));
        $this->categorie=htmlspecialchars(strip_tags($this->categorie));
        

        //bind values
        $stmt->bindParam(':nom',$this->nom);
        $stmt->bindParam(':adresse',$this->adresse);
        $stmt->bindParam(':bp',$this->bp);
        $stmt->bindParam(':email',$this->email);
        $stmt->bindParam(':siteweb',$this->siteweb);
        $stmt->bindParam(':fax',$this->fax);
        $stmt->bindParam(':tel',$this->tel);
        $stmt->bindParam(':logo',$this->logo);
        $stmt->bindParam(':categorie',$this->categorie);
       
        
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    function readALL($from_record_num, $records_per_page){
        $requette="SELECT id,nom,adresse,bp,email,siteweb,fax,tel,logo,categorie
                    FROM ".$this->table_name."
                    ORDER BY
                        nom ASC
                    LIMIT
                        {$from_record_num},{$records_per_page}";
        $stmt=$this->conn->prepare($requette);
        $stmt->execute();
        return $stmt;
                    

    }

    function readOne(){
        $query="SELECT id,nom,adresse,bp,email,fax,tel,categorie
                FROM ".$this->table_name."
                WHERE id=?
                Limit 0,1 ";
        $stmt=$this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
    $stmt->execute();
  
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
  
    $this->nom = $row['nom'];
    $this->adresse= $row['adresse'];
    $this->bp = $row['bp'];
    $this->email = $row['email'];
    $this->fax = $row['fax'];
    $this->tel = $row['tel'];
    $this->categorie = $row['categorie'];
    }

    function modif(){
        $query = "UPDATE
                " . $this->table_name . "
            SET
                nom = :nom,
                adresse = :adresse,
                bp = :bp,
                email = :email,
                fax = :fax,
                tel = :tel,
                categorie = :categorie
            WHERE
                id = :id";
  
    $stmt = $this->conn->prepare($query);
  
    // posted values
    $this->nom=htmlspecialchars(strip_tags($this->nom));
    $this->adresse=htmlspecialchars(strip_tags($this->adresse));
    $this->bp=htmlspecialchars(strip_tags($this->bp));
    $this->email=htmlspecialchars(strip_tags($this->email));
    $this->fax=htmlspecialchars(strip_tags($this->fax));
    $this->tel=htmlspecialchars(strip_tags($this->tel));
    $this->categorie=htmlspecialchars(strip_tags($this->categorie));
    $this->id=htmlspecialchars(strip_tags($this->id));
    // bind parameters
    $stmt->bindParam(':nom',$this->nom);
    $stmt->bindParam(':adresse',$this->adresse);
    $stmt->bindParam(':bp',$this->bp);
    $stmt->bindParam(':email',$this->email);
    $stmt->bindParam(':fax',$this->fax);
    $stmt->bindParam(':tel',$this->tel);
    $stmt->bindParam(':categorie',$this->categorie);
    $stmt->bindParam(':id',$this->id);
       
  
    // execute the query
    if($stmt->execute()){
        return true;
    }
  
    return false;

    }

    function supp(){
        $requette="DELETE FROM ".$this->table_name." WHERE id=?";
        $stmt=$this->conn->prepare($requette);
        $stmt->bindParam(1,$this->id);
         
        if($resultat=$stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    
    
}
