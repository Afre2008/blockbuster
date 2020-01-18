<?php require_once('header.php'); ?>
<?php require_once('querysLocadora.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php foreach($todasCategorias as $categoria){
// echo $key;
    echo "
    <div class='card' style= 'width: 18rem;'>
    <div class='card-body'>
        <a href='interna.php' class='card-link'>$categoria[nome]</a>
      </div>
    </div>";
}?>


<div class="precos"><h2>Melhores Preços</h2></div>
<div class="lista-precos">
<?php foreach($todosPrecosFilmes as $preco){
  // var_dump($preco);
echo "<ul class='list-group'>
  <li class='list-group-item'>$preco[titulo] $preco[descricao] $preco[preco_da_locacao]</li>

</ul>";
}?>
</div>
</body>


<?php require_once('footer.php'); ?>
