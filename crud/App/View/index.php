<?php 
 
 require_once '../vendor/autoload.php';
 use App\Controller\Actions;
   
    $Actions = new Actions;

    $method = $_SERVER['REQUEST_METHOD'];

    if(isset($_POST['delete']))
    {
        $id = $_POST['data'];
        $Actions->DeleteDatas($id);
    }
    
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
<style>
    .divForm{
        display: none;
    }
</style>
</head>
<body>
        <div class="container">
            <header></header>
            <main>
                <div class="layout">
                <?php
                   require('./select.php');
                ?>
                </div>

                <div class="divForm">
                    <form >
                        <input type="text" id="inputName">
                        <input type="text" id="inputQuantit">

                        <button id="btnSend">Send</button>
                        <button id="cancel">cancel</button>
                    </form>
                </div>
            </main>

            <footer></footer>
        </div>
</body>
<script >

function DeleteFunc(id){

    $.ajax({
        method:'POST',
        url:'index.php',
        data:{data:id,delete:'delete'},
        success:function(datas){
            $('.layout').load('select.php')
        }
    })
    $(".divForm").hide()
}
function ChangeFunc(id,name,quantit){
    $(".divForm").show()

    const inputName = $('#inputName')
    const inputQuantit = $("#inputQuantit")
    const BtnSend = $("#btnSend")

    const Form = $("form").click((e)=>e.preventDefault())


    const BtnCancel = $("#cancel").click(()=>{
        inputName.val("")
        inputQuantit.val("")
        id = ""
        name = ""
        quantit=""
        $(".divForm").hide()
    })
    inputName.val(name)
    inputQuantit.val(quantit)

    BtnSend.click((e)=>{
        const data = {id,name:inputName.val(),quantit:inputQuantit.val(),update:'update'}
        $.ajax({
        method:'POST',
        url:'index.php',
        data,
        })
       .done((datas)=>{
        $('.layout').load('select.php')
        id = ""
       })
        $(".divForm").hide()
    })
}

</script>
</html>


