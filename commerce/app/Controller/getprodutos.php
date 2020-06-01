<?php 

namespace App\Controller;

class getPro{
    private $name;
    private $quantidade;

    public function setName($name){
       $this->name=$name;
    }
    public function setQuan($quantidade){
        $this->quantidade=$quantidade;
    }
    public function getName(){
        return $this->name;
    }
    public function getQuant(){
        return $this->quantidade;
    }
}

?>