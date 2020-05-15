<?php 



namespace  App\model;
require_once 'C:\Users\infoecia\Desktop\crudPHP\crud\vendor\autoload.php';

class GetP{
    public function select(){
        $sql  =  "SELECT * FROM produtos ";

        $stmt=db::Getconex()->prepare($sql);
        $stmt->execute();
    }
}


?>