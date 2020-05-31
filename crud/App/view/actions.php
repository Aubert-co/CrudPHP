<?php

use App\model\GetCon;

require_once '../vendor/autoload.php';
//use App\model\GetCon;

require_once '../Controller/sessao.php';

/*$GetU=new GetUsers();
$User =  new Users;

$User->setUsers($_SESSION['nome']);

$permi =  $GetU->permi($User);

$total = array();
foreach($permi as $conc){
   $val = $conc['permi'];
}*/


/*function funcionalidade($valor){
    $produto = new produtos();
    $layout1 ="<div> </div>"; 
    
   
    if($valor==1){
        foreach($produto->SelectP() as $pro){
            $layout1 .= ' 
            
              
         <td>
         <button  class="delete" id='.$pro['id'].'  >delete</button>
         <button class="updateS" id='.$pro['id'].'>Update</button>
         </td>
         <td>  '.$pro['name'].'</td>
         <td>'.$pro['quantidade'].'</td>
         </tr>
     ';
           
           }
           return $layout1;
    }
    if($valor == 2){
        foreach($produto->SelectP() as $pro){
            $layout1 .= ' 
           
         <td>
         <button  class="delete" id='.$pro['id'].'  >delete</button>
         <button class="updateS" id='.$pro['id'].'>Update</button>
         </td>
         <td>  '.$pro['name'].'</td>
         <td>'.$pro['quantidade'].'</td>
         </tr>
     ';
             
       
           
           }
           return $layout1;
    }
  

  */  if(isset($_POST['select'])){
        $limit =$_POST['select'];
         $sql = "SELECT *FROM produtos limit $limit ";
     }
     else if(isset($_POST['test'])){
         $busca =  $_POST['test'] ;
          $sql = "SELECT *FROM produtos WHERE name like '%".$busca."%' ";
     
      }else{
          $sql = "SELECT *FROM produtos";
      }
      $stmt = GetCon::Con()->prepare($sql);
      $stmt->execute();
      if($stmt->rowCount()>0){
         $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
     
     $layout1 ='<div id="res"> 
     <table >
     <thead>
     <tr>
         <th>Actions</th>
         <th>Produto</th>
         <th>Quantidade</th>
     </tr>
     </thead>
      <tbody>';
      foreach($resultado as $pro){
         $layout1 .= '
         <td>
         <button  class="delete" id='.$pro['id'].'  >  <i class="large material-icons">delete</i></button>
         <button class="updateS" id='.$pro['id'].'> <i class="large material-icons">create</i></button>
         </td>
         <td>  '.$pro['name'].'</td>
         <td>'.$pro['quantidade'].'</td>
         </tr>
         </tr>
         </tbody>';
      
      }
      $layout1 .=  '</table> </div>';
     }
      else{
         $layout1 = "NENHUM REGISTRO ENCONTRADO";
     }
    
//return $layout1;
//}
echo $layout1;
//$texto = funcionalidade($val);




?>
