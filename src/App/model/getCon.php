<?php 


namespace  App\model;



class GetCon{
   private static $instance;
 
   public static function Con(){
       try{
   if(!isset(self::$instance)){
    self::$instance =  new \PDO('mysql:host=localhost;dbname=php;','root','black');
    return self::$instance;
}
       }catch(\Error $e){
           throw $e->getMessage();
       }
   }

}

?>