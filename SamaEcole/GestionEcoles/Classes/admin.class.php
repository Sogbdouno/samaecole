<?php
namespace SamaEcole\GestionEcoles\Classes;
class Admin{
    private $id_admin;
    private $email;
    private $password;
    
    public function __construct($id,$email,$password){
        $this->id_amin=$id;
        $this->email=$email;
        $this->password=$password;

    }
    public function get_id_admin(){
        return $this->id_admin;
    }
    public function get_email(){
        return $this->email;
    }
    public function get_password(){
        return $this->password;
    }
    public function set_id_admin($id){
        $this->id_admin=$id;
    }
    public function set_email($email){
        $this->email=$email;
    }
    public function set_password($password){
        $this->password=$password;
    }
    
}



?>