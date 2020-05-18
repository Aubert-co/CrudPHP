<?php 

use  App\model\produtos;


require_once '../vendor/autoload.php';

if(isset($_POST['id'])){
  
    $prodtuos = new produtos();
    $id = $_POST['id'];
    $prodtuos->Delete($id);
 
}
?>