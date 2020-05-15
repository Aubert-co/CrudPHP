<?php




require_once 'se.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="search">
   <input type="text" id="buscaname">
   <button type="submit" class="buscar" id="buscar" >buscas</button>
 
  </div>
  <select name="" id="select">
    <option value="5">5</option>
    <option value="10">10</option>
    <option value="50">50</option>
  </select>
     <div id="results">
       <?php echo $texto ?>
     </div>
</body>
<script>

    
    //  var id = $('#buscaname').val()
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

</script>
</html>