<?php   


namespace App\Controller;

require_once '../vendor/autoload.php';
class getProdutos{
    private $nameP;
    private $quantidade;
    
    public function setProdutos($nameP){
         $this->nameP=$nameP;
    }
    public function setQuanti($quantidade){
         $this->quantidade=$quantidade;
    }
    public function getProdutos(){
       return $this->nameP;
    }
    public function getQuanti(){
       return $this->quantidade;
    }
}


?>