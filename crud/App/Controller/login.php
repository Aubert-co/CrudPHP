<?php


require_once __DIR__.'/../vendor/autoload.php';

use App\model\GetUsers;
use App\Controller\Users;

session_start();

$Login = new GetUsers;

$pessoas = new Users;

if(isset($_POST['enviar'])){
 
$name = $_POST['name'];
$senha = $_POST['senha'];

$pessoas->setUsers($name);

$permis = $Login->Login($pessoas,$senha);

if($_SESSION['erro']==false){
 
    if($_SESSION['login']==true){
    header('Location:index');
    $_SESSION['nome']=$name;
    }else{
      $erros[]=" senha errada";
    //  header('Location:e');
    }
  }else{
    $erros[]="usuario não encontrado ";
}
}

?>