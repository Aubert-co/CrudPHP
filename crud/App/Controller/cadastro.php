<?php 


require_once '../vendor/autoload.php';
use App\model\GetUsers;
use App\Controller\Users;
session_start();
$GetU = new GetUsers();
$pessoa = new Users();
if(isset($_POST['enviar'])){
    $name = $_POST['nome'];
    $senha = $_POST['senha'];
    $hash = password_hash($senha,PASSWORD_DEFAULT);
    $func = $_POST['permi'];
    $pessoa->setUsers($name);
    $pessoa->setSenha($hash);
    $pessoa->setFunc($func);
    $GetU->Cadastro($pessoa);
     

}
?>