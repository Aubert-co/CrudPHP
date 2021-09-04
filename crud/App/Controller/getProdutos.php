<?php   


namespace App\Controller;

require_once '../vendor/autoload.php';
class GetProdutos{
    private $nameP;
    private $quantidade;
    private $id;
    public function SetProdutosName($nameP){
         if(is_string($nameP)){
            return $this->nameP=$nameP;
         }
         echo('o nome deve ser string');
    }
    public function SetQuantit($quantidade){
         $this->quantidade=$quantidade;
    }
    public function SetId($id){
      $this->id=$id;
   }
    public function GetProdutosName(){
       return $this->nameP;
    }
    public function GetQuantit(){
       return $this->quantidade;
    }
    public function GetId(){
       return $this->id;
    }
   
}


?>