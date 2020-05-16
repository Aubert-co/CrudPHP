<?php 

require_once './actions.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./javascript/ajax.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
    <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"-->
  
    <title>Document</title>
</head>

<body>

<div class="search">
   <input type="text" id="buscaname">
   <button type="submit" class="buscar" id="buscar" >buscas</button>
 
  </div>
  <select name="" id="select">
    <option value="50">50</option>
    <option value="10">10</option>
    <option value="5">5</option>
  </select>
     <div id="results">
         <?php  $layout1 ?>     </div>

     <div class="modal"id="modal">
        <input type="text"id="name">
        <input type="text"id="quantidade">
        <button type="submit" id="confirmar">Confirmar</button>
        <button type="submit"id="cancelar">Cancelar</button>
     </div>
</body>

<script>


    
</script>

   

</html>