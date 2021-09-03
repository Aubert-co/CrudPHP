<?php 

require_once '../vendor/autoload.php';

use App\model\produtos;

function Layout(){

$Product = new produtos();
$resultado = $Product->SelectP();
$layout1 ="<div> </div>";
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
      
      foreach($resultado as $data){
        $id = $data['id'];
        $name = $data['name'];
        $quantit = $data['quantidade'];
        $layout1 .= '
         <td>
         <i class="large material-icons" onClick=DeleteFunc('.$id.')>delete</i>
        <i class="large material-icons">create</i>
         </td>
         <td>  '.$name.'</td>
         <td>'.$quantit.'</td>
         </tr>
         </tr>
         </tbody>';
      
      }
      $layout1 .=  '</table> </div>';
     
return $layout1;
}





/*use App\Controller\produtos;
require_once 'C:\wamp\www\cursophp.com\crudnuevo\vendor\autoload.php';

$produto = new produtos();


$layout1 ="<div> </div>";
foreach($produto->SelectP()as $pro){
    $layout1 .= ' <div id="ok">
    
    <table>
    <thead>
    <tr>
        <th>Actions</th>
        <th>Produto</th>
        <th>Quantidade</th>
    </tr>
    </thead>
     <tbody>
     <tr>
         <td>
         <button id="apagar">apagar</button>
         <button>editar</button>
         </td>
         <td>  '.$pro['name'].'</td>
         <td>'.$pro['quantidade'].'</td>
     </tbody>
     </table>
     ';
$layout1.='</div>';     
   }*/
  
?>