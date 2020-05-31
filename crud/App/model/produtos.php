<?php 

namespace App\model;


require_once '../vendor/autoload.php';
use App\model\GetCon;
use App\Controller\getProdutos;


class produtos{

    public function SelectP(){
      
             
            $sql ="SELECT *FROM produtos  ";
            $stmt  = GetCon::Con()->prepare($sql);
           
            $stmt->execute();
           
                
        if($stmt->rowCount()>0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
               
            return $resultado;

        }else{
            return [];
        }
    

    }
    public function Add(getProdutos $p){
        $sql = "INSERT INTO produtos(nome,quantidade) VALUES(?,?)";

        $stmt  = GetCon::Con()->prepare($sql);
        $stmt->bindValue(1,$p->getProdutos());
        $stmt->bindValue(2,$p->getQuanti());
        $stmt->execute();
       
    }
    public function Delete($id){
      
        $sql = "DELETE FROM produtos WHERE id=?";
        $stmt  = GetCon::Con()->prepare($sql);
        $stmt->bindValue(1,$id);
        $stmt->execute();
    }
    public function Update(getProdutos $p,$id){
        $sql = "UPDATE produtos SET nome=? ,quantidade=? WHERE id=?";

        $stmt  = GetCon::Con()->prepare($sql);
        $stmt->bindValue(1,$p->getProdutos());
        $stmt->bindValue(2,$p->getQuanti());
        $stmt->bindValue(3,$id);
        $stmt->execute();    
    }
   public function pdf(){
       $sql = "SELECT *FROM produtos WHERE id = 274";

       $stmt = GetCon::Con()->prepare($sql);
       $stmt->execute();

       if($stmt->rowCount()>0){
        $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
           
        return $resultado;

    }else{
        return [];
    }

   }
    
    
}



?>