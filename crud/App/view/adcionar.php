<?php 
require_once '../vendor/autoload.php';
require_once '../Controller/sessao.php';
use App\model\produtos;
use App\Controller\getProdutos;
if(isset($_POST['enviar'])){
    
$name = $_POST['name'];
$quantidade =$_POST['quantidade'];
$addP = new produtos();
$pro = new getProdutos();
$pro->setProdutos($name);
$pro->setQuanti($quantidade);
$addP->Add($pro);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
     <input type="text"placeholder="name"name="name">
     <input type="text"placeholder="quantidade"name="quantidade">
     <button type="submit" name="enviar">Enviar</button>
    </form>
</body>
</html>