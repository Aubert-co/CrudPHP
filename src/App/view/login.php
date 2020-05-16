<?php 
require_once '../vendor/autoload.php';
require_once '../Controller/login.php';
/*
use App\Controller\GetUsers;
use App\model\Users;

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
     
    }else{
      $erros[]=" senha errada";
    }
  }else{
    $erros[]="usuario não encontrado ";
}
}
*/


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
</head>
<body>
    
        <div id="msg">
        <?php  
        if(!empty($erros)){
            foreach($erros as $er){
                echo "<li>". $er. "</li>";
            }
        }
        ?>
   
   <form  method="post">
    <input type="text" id="name" name="name">

    <input type="text" id="senha" name="senha">
    
    <button type="submit" name="enviar" id="enviar">enviar</button>
    </form>
   </div>
</body>
<script>

    /*$("document").ready(function(){
 
        $("#envia").click(function(){
         
            $("#msg").load("http://cursophp.com/crudnuevo/App/view/login.php",{
                enviar:'oqekr',
                name:$("#name").val(),
                senha:$("#senha").val(),
            
            })
      
        })
    })*/
</script>
</html>