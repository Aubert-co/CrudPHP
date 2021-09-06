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
    if(isset($_POST['insert']))
    {
        echo('pça');
        $name = $_POST['name'];
        $email = $_POST['email'];
        $job = $_POST['job'];
        $Actions->AddDatas($name,$email,$job);
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="./css/style.css">

</head>
<body>
        <div class="layout">
            <header></header>
            <main>
                <div class="contents">
                <?php
                   require('./select.php');
                ?>

                <div class="form">
                    <form >
                         <h4>Insert Values</h4>
                        <input type="text" placeholder="Name" id="name">
                        <input type="text" placeholder="Email" id="email">
                        <input type="text" placeholder="Job" id="job">

                        <button class="btn waves-effect waves-light"  onclick=SendValues()>Submit
                            <i class="material-icons right">send</i>
                        </button>
                    </form>
                    </div>
                </div>

                <div class="divForm"  style="display:none">
                    <form  >
                         <h4>Change Values</h4>
                        <input type="text" id="inputName">
                        <input type="text" id="inputEmail">
                        <input type="text" id="inputJob">

                        <button class="btn waves-effect waves-light" id="btnSend" name="action">Submit
                            <i class="material-icons right">send</i>
                        </button>
                      
                        <button  class="btn waves-effect waves-light" id="cancel">cancel</button>
                    </form>
                </div>
            </main>

            <footer></footer>
        </div>
</body>
<script src="./javascript/index.js"></script>
</html>


