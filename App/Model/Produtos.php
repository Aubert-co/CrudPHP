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
      
        $sql ="SELECT * FROM Jobs";
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
    public function Add($name,$email,$job){
        $sql = "INSERT INTO Jobs(name,email,job) VALUES(?,?,?)";

        $conex = $this->Conetion();
        $con = $conex->Con();

        $stmt  = $con->prepare($sql);
        $stmt->bindValue(1,$name);
        $stmt->bindValue(2,$email);
        $stmt->bindValue(3,$job);
        $stmt->execute();
       
    }
    public function Delete($id){
      
        $sql = "DELETE FROM Jobs WHERE id=?";
        $conex = $this->Conetion();
        $con = $conex->Con();
        $stmt  = $con->prepare($sql);
        $stmt->bindValue(1,$id);
        $stmt->execute();
    }
    public function Update($id ,$name,$email,$job){
  

        $sql = "UPDATE Jobs SET name=? , email=? , job=? WHERE id=?";

        $conex = $this->Conetion();
        $con = $conex->Con();
        $stmt  = $con->prepare($sql);
        $stmt->bindValue(1,$name);
        $stmt->bindValue(2,$email);
        $stmt->bindValue(3,$job);
        $stmt->bindValue(4,$id);
        
        $stmt->execute();   
   
    }
}



?>