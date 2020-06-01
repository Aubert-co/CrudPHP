
<?php 

require_once '../Controller/sessao.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<?php  include './includes/nav.php' ?>
<?php include './includes/menuL.php'?>
<body>
     

<!-- Use any element to open the sidenav -->

           
           <div class="texto" id="texto1">
           <h2>What is Lorem Ipsum?</h2>  
           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
              standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
               make a type specimen book. It has survived not only five centuries, but also the leap into electronic 
               typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of 
               Letraset sheets containing Lorem Ipsum  passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum
              
          </p>

           </div>
         <div class="texto" id="texto2">
             <h2>Why do we use it?</h2>
             <p>It is a long established fact that a reader will be distracted by the readable content of a page when 
                 looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                  of letters, as opposed to using 'Content here, content here', making it look like readable English. 
                  Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
                   and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions
                    have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
            </p>
         </div>
           
         <div class="texto" id="texto3">
             <h2>Why do we use it?</h2>
             <p>It is a long established fact that a reader will be distracted by the readable content of a page when 
                 looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                  of letters, as opposed to using 'Content here, content here', making it look like readable English. 
                  Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
                   and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions
                    have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
            </p>
         </div>
         </div>
     </main>
     </div>
     <footer>
    
     </footer>
</body>
<script>

$(document).ready(function(){
  
 $("#btnADC").click(function(){
     $("body").load("../select.php",function(){
   })
 })


  })
</script>
</html>