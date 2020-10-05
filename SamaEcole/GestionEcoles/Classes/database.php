<?php
namespace SamaEcole\GestionEcoles\Classes;
use \PDO;
class Database
{
private static $db_name="sama_ecole";
private static $host="localhost";
private static $username="root";
private static $password="root";
private static  $conn; 


public static function get_connexion()
{
    if(self::$conn==null)
    {
        try
        {
            self::$conn = new PDO( 
                "mysql:host=".self::$host.";"."dbname=".self::$db_name, 
                self::$username, self::$password);
        }
        catch(PDOException $ex)
        {
            echo "Impossible de se connecter a la base de donnee:".$ex->getMessage();
        }

    }
    return self::$conn;

}

public static function close_connection()
{
    self::$conn=null;
}


}