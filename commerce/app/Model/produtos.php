<?php 



namespace App\model;

class produtos {
    private static $instance;

    public static function getConx(){
        try{
            if(!isset(self::$instance)){
             self::$instance = new \PDO('mysql:host=localhost;dbname=catalago;','root','');
             return self::$instance;
         }
                }catch(\Error $e){
                    throw $e->getMessage();
                }
            }
    
}

?>