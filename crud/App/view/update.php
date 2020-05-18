<?php 


require_once '../vendor/autoload.php';
header('Location:index.php');

use App\model\produtos;
use App\Controller\getProdutos;


$getP = new getProdutos;
$name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
$quantidade = filter_input(INPUT_POST,'quantidade',FILTER_SANITIZE_NUMBER_INT);
$getP->setQuanti($quantidade);
$getP->setProdutos($name);
$id = $_POST['id'];
$produtos = new produtos;
$produtos->Update($getP,$id);
?>