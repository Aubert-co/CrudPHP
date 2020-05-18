<?php  

namespace  App\model;

//require_once '../vendor/autoload.php';

use App\Controller\Users;


class GetUsers{
 
   
    public function Login(Users $u,$senha){
       
        $sql = "SELECT *FROM pessoas WHERE users=? ";

        $stmt  = db::GetConex()->prepare($sql);
        $stmt->bindValue(1,$u->getUsers());
        $stmt->execute(); 
      
        if($stmt->rowCount()>0){
            $_SESSION['erro']=false;
            $resultado =$stmt->fetch();

             $hash =  $resultado['senha'];
             
             
       
            if(password_verify($senha,$hash)){ 
              
             
               return   $_SESSION['login']=true;
              
              }else{
                  return $_SESSION['login']=false;
              }
        }else{
            return $_SESSION['erro']=true;
        }
        
    }
    
    public function permi(Users $u){
       
        $sql = "SELECT * FROM pessoas WHERE users=?";
  
        $stmt = db::GetConex()->prepare($sql);
        $stmt->bindValue(1,$u->getUsers());

        $stmt->execute();

        if($stmt->rowCount()>0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
      }
      
      public function Cadastro(Users $u){
   
        $sql = "INSERT INTO pessoas(users,senha,permi) VALUES (?,?,?)";
        
        $stmt = db::GetConex()->prepare($sql);
        $stmt -> bindValue(1,$u->getUsers());
        $stmt -> bindValue(2 ,$u->getSenha());
        $stmt -> bindValue(3 ,$u->getFunc());
        $stmt ->execute();
        
 
    }
 
}





?>