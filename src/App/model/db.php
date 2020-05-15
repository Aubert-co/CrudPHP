<?php  



namespace  App\model;
require_once 'C:\Users\infoecia\Desktop\crudPHP\crud\vendor\autoload.php';
class db{
    private static  $instance;

   public static  function GetConex(){
 
    if(!isset(self::$instance)){
        self::$instance =  new \PDO('mysql:host=localhost;dbname=php;','root','black');
        return self::$instance;
    }else{
        return self::$instance = "error";
    }
    }
}







?>