<?php 


namespace  App\model;

use PDOException;

class GetCon
{
   private  $instance;
 
   public  function Con(){
    try
    {
        if(!isset(self::$instance))
        {
            $name = 'root';
            $password = "";
            $instance = new \PDO('mysql:host=localhost;dbname=users;',$name,$password);
           $instance->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
            return $instance;
        }
    }
    catch(\PDOException $e)
        {
         
           throw new PDOException($e);
        }
   }
}

?>