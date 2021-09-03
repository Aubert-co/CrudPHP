<?php 

/*echo('ola');
$datas = json_decode($_POST['delete']);
$data = json_decode(file_get_contents("php://input"), true);
$task = $data['value'];
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
        <div class="container">
            <header></header>
            <main>
                <div class="layout">
                <?php
                    require('../Controller/select.php');
                    use App\model\produtos;
                    
                    $Products = new produtos;
                        if(isset($_POST['delete']))
                        {
                        $id = $_POST['data'];
                        $Products->Delete($id);
                        }
                echo(Layout());
                    
                ?>
                </div>
            </main>

            <footer></footer>
        </div>
</body>
<script >
const BtnDelete = document.querySelector('#delete')
const results = document.querySelector(".layout")

function DeleteFunc(id){
    $.ajax({
        method:'POST',
        url:'index.php',
        data:{data:id,delete:'delete'},
        success:function(data){
          document.body.innerHTML = data
        }
    })

}

</script>
</html>


