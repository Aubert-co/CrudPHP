<?php  

namespace App\Controller;
require_once 'C:\Users\infoecia\Desktop\crudPHP\crud\vendor\autoload.php';


class Users{
    private $usuarios;
    private $senha;
    private $funçoes;

    public function setUsers($usuarios){
        $this->usuarios=$usuarios;
    }
    public function setSenha($senha){
        $this->senha=$senha;
    }
    public function setFunc($funçoes){
        $this->funçoes=$funçoes;
    }
    public function getUsers(){
     return $this->usuarios;
    }
    public function getFunc(){
     return $this->funçoes;
    }
    public function getSenha(){
     return  $this->senha;
    }
  
}






?>