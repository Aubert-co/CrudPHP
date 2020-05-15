<?php 


use App\model\produtos;
require_once 'C:\Users\infoecia\Desktop\crudPHP\crud\vendor\autoload.php';

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
         <button class="apagar" id='.$pro['id'].'>apagar</button>
         <button class="editar" id='.$pro['id'].'>editar</button>
         </td>
         <td>  '.$pro['name'].'</td>
         <td>'.$pro['quantidade'].'</td>
     </tbody>
     </table>
     ';
$layout1.='</div>';     
   }
  
echo $layout1;







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