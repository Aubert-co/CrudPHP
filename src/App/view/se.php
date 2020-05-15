<?php 
require_once 'C:\wamp\www\cursophp.com\crudnuevo\vendor\autoload.php';

use App\Controller\db;
use App\Controller\produtos;
use App\model\GetCon;
/*
 if(isset($_POST['test'])){
 
  $name =$_POST['test'];

 }else{
     $name='';
    
 }
    $produto = new produtos;
    $layout1 ="<div id='res'> </div>"; 
    
 foreach($produto->SelectP($name) as $pro){
    $layout1 .= '
         <td>
         <button  class="delete" id='.$pro['id'].'  >  <i class="large material-icons">delete</i></button>
         <button class="updateS" id='.$pro['id'].'> <i class="large material-icons">create</i></button>
         </td>
         <td>  '.$pro['name'].'</td>
         <td>'.$pro['quantidade'].'</td>
         </tr>
     ';
  $layout1 .='</div>';
}
echo $layout1;
   */
 



if(isset($_POST['select'])){
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
    <button  class="apagar" id='.$pro['id'].'  >  delete</button>
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
$texto =  $layout1;

?>