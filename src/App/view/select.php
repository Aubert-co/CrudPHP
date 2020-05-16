<?php 

require_once '../Controller/actions.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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
  
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
  document.getElementById("nav").style.width="400px"
}

function closeNav(){
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}

$(document).ready(function(){   
  $('#modal').hide()

        $("#buscaname").keypress(function(e){
          var name =  $('#buscaname').val()
          if(name !=''){
          $("#buscar").click(buscaname(name))
          }else{
          
            buscaname()
          }
    })

    $("#select").click(function(){
   var  valor =$("#select").val()
      select(valor)

 
    })

$('.delete').click(function(){
  var id = $(this).attr('id')
delte(id)


})
$('#inicio').click(function(){
 
   $('body').load("./",function(){})
})
$('.updateS').click(function(){
    $('#modal').show()
    var id = $(this).attr('id')
    $('#cancelar').click(function(){
        $('body').load("../select.php",function(){
    })
   
    })
    $('#confirmar').click(function(){
    $.post("../Controller/update.php",{id:id,name:$('#name').val(),quantidade:$("#quantidade").val()},function(){
    $('body').load("../select.php",function(){
    })
    })
    })
   
})

})
    
 function buscaname(name){
  $.ajax({
    method:"POST",
    url:"../Controller/actions.php",
    data:{test:name,acti:'qwe'},
    success:function(data){
    $('#res').html( data )
    }

})
}
function select(select){
  $.ajax({
    method:"POST",
    url:"../Controller/actions.php",
    data:{acti:'action',select:$("#select").val()},
    success:function(data){
    $('#res').html( data )
    }

})
}
function delte(id){
    $.ajax({
    method:"POST",
    url:"../Controller/delete.php",
    data:{id:id},
    success:function(data){
        $('body').load("../select.php",function(){
    })
    }
    })

}
 

    
</script>

   

</html>