  
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
      $.post("./update.php",{id:id,name:$('#name').val(),quantidade:$("#quantidade").val()},function(){
      $('body').load("../select.php",function(){
      })
      })
      })
     
  })
  
  })
      
   function buscaname(name){
    $.ajax({
      method:"POST",
      url:"./actions.php",
      data:{test:name,acti:'qwe'},
      success:function(data){
      $('#res').html( data )
      }
  
  })
  }
  function select(select){
    $.ajax({
      method:"POST",
      url:"./actions.php",
      data:{acti:'action',select:$("#select").val()},
      success:function(data){
      $('#res').html( data )
      }
  
  })
  }
  function delte(id){
      $.ajax({
      method:"POST",
      url:"./delete.php",
      data:{id:id},
      success:function(data){
          $('body').load("../select.php",function(){
      })
      }
      })
 
  }
   