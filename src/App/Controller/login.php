<?php


require_once '../vendor/autoload.php';
use App\model\GetUsers;
use App\model\Users;

session_start();
$pessoas = new Users;
$Login = new GetUsers;
$erros = array();


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
    }
  }else{
    $erros[]="usuario não encontrado ";
}
}

?>