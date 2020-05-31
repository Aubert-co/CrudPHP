<?php  



namespace  App\model;

require_once '../vendor/autoload.php';
class db{
    private static  $instance;

   public static  function GetConex(){
 
    if(!isset(self::$instance)){
        self::$instance =  new \PDO('mysql:host=localhost;dbname=usuarios;','root','');
        return self::$instance;
    }else{
        return self::$instance = "error";
    }
    }
}







?>