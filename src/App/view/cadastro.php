<?php
require_once 'C:\Users\infoecia\Desktop\crudPHP\crud\vendor\autoload.php';
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

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form   method="post">
    <input type="text" name="nome">
    
    <input type="text"name="senha">

    <input type="number"name="permi">

    <button type="submit" name="enviar">Envia</button>
    </form>

    <?php 
 
    ?>
</body>
</html>