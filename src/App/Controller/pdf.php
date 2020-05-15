
    <?php 
    use App\Controller\produtos;
    require_once 'C:\wamp\www\cursophp.com\crudnuevo\vendor\autoload.php';
$produto = new produtos;



foreach($produto->pdf() as $pro){
    $nome = $pro['name'];
    $quantidade = $pro['quantidade'];
    
}

    $layout ='
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>Document</title>
    </head>
<body>
    <h2 class="center-align">Informações Sobre o produto</h2>
     <hr>
     <table >
         <thead>
             <tr>
             <th>Produto</th>
             <th>Quantidade</th>
             <th>Vendas</th>
             </th>
         </thead>
         <tbody>
         <tr>
         <td> '.$nome.'</td>
         <td> '.$quantidade.'</td>

        </tbody>     
</table>
</body>
</html>' ;

    ?>


    
