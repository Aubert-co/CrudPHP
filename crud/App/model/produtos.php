<?php 

namespace App\model;


require_once '../vendor/autoload.php';
use App\model\GetCon;
use App\Controller\GetProdutos;


class Produtos{
    private function Conetion(){
        return new GetCon();
    }
    public function SelectP(){
      
        $sql ="SELECT * FROM produtos";
        $conex = $this->Conetion();
        $con = $conex->Con();
        $stmt =$con->prepare($sql);
        $stmt->execute();
        
        
        if($stmt->rowCount()>0)
        {
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }
            return [];


    }
    public function Add($name,$quantit){
        $sql = "INSERT INTO produtos(name,quantidade) VALUES(?,?)";
        $conex = $this->Conetion();
        $con = $conex->Con();

        $stmt  = $con->prepare($sql);
        $stmt->bindValue(1,$name);
        $stmt->bindValue(2,$quantit);
        $stmt->execute();
       
    }
    public function Delete($id){
      
        $sql = "DELETE FROM produtos WHERE id=?";
        $conex = $this->Conetion();
        $con = $conex->Con();
        $stmt  = $con->prepare($sql);
        $stmt->bindValue(1,$id);
        $stmt->execute();
    }
    public function Update($id ,$name,$quantit){
        $sql = "UPDATE produtos SET name=? ,quantidade=? WHERE id=?";

        $conex = $this->Conetion();
        $con = $conex->Con();
        $stmt  = $con->prepare($sql);
        $stmt->bindValue(1,$name);
        $stmt->bindValue(2,$quantit);
        $stmt->bindValue(3,$id);
        $stmt->execute();    
    }
  
    
}



?>