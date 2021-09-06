<?php 
 require_once '../vendor/autoload.php';
 use App\Controller\Actions;
 $Actions = new Actions;
 $Layout = $Actions->Layout();
  echo($Layout);

  if(isset($_POST['update']))
  {
      $id = $_POST['id'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $job = $_POST['job'];
      
     $Actions->ChangeDatas($id,$name,$email,$job);
    
  }
?>