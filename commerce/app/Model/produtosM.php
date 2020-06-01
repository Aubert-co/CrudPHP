<?php 

namespace App\model;
use App\model\produtos;
class crud{
    function Select(){
        $sql = "SELECT *FROM produtos";

        $stmt = produtos::getConx()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount()<0){
            return [];
        }else{
           $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
           return $resultado;
        }
    }
    function add(){
        $sql = "INSERT INTO produtos('nome','quantidade') VALUES(?,?)";

        $stmt = produtos::getConx()->prepare($sql);
        
    }
}

?>