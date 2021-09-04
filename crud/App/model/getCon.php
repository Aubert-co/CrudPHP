<?php 


namespace  App\model;

use PDOException;

class GetCon
{
   
   

   public  function Con(){
    try
    {
        if(!isset($instance))
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