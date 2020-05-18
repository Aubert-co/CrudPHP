




     <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="./css/background.css">
    <!--link rel="stylesheet" href="style.css"-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
    
    
    <title>Document</title>
</head>

  <div id="all">
     <main >
     <div class="main">
     <div class="container">
            <span onclick="openNav()"><a href="#"><i class="material-icons">menu</i></a></span>
            </div>
     <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#" id="inicio">Inicio</a>
  <a href="#"id="btnADC">Select</a>
  <a href="#">Contact</a>
  <a href="logout">Sair</a>
</div>
<div class="result">

</div>
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
  /*
$(document).ready(function(){   
$('#modal').hide()
$('.delete').click(function(){
  var id = $(this).attr('id')
 alert(id)
   $.ajax({
    method:"POST",
    url:"../Controller/delete",
    data:{id:id},
    success:function(data){
    $('#res').html( data )
    }
    })

})
$('#inicio').click(function(){
 
   $('body').load("/",function(){})
})
$('.updateS').click(function(){
    $('#modal').show()
    var id = $(this).attr('id')
    $('#cancelar').click(function(){
        $('body').load("../Controller/select.php",function(){
    })
   
    })
    $('#confirmar').click(function(){
    $.post("../Controller/update.php",{id:id,name:$('#name').val(),quantidade:$("#quantidade").val()},function(){
    $('body').load("../Controller/select.php",function(){
    })
    })
    })
   
})

})
    
 function buscaname(name){
  $.ajax({
    method:"POST",
    url:"se.php",
    data:{test:name,acti:'qwe'},
    success:function(data){
    $('#res').html( data )
    }

})
}
function select(select){
  $.ajax({
    method:"POST",
    url:"se.php",
    data:{acti:'action',select:$("#select").val()},
    success:function(data){
    $('#res').html( data )
    }

})
}
$(document).ready(function(){
  buscaname()
        $("#buscaname").keypress(function(e){
          var name =  $('#buscaname').val()
          if(name !=''){
          $("#buscar").click(buscaname(name))
          }else{
          
            buscaname()
          }
    })
   select()
    $("#select").click(function(){
   var  valor =$("#select").val()
      select(valor)

 
    })
})
    */
</script>