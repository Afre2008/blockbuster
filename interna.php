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

<div class="cat"><h2>NOME DA CATEGORIA</h2></div>
<?php foreach($todosFilmes as $filmes){

echo "
<div class='lista-categoria'>
<ul class='list-group'>
  <li class='list-group-item'>$filmes[titulo]</li>

</ul>
</div>";
}?>
<div class="button-int">
<button type="button" class="btn btn-primary">VER TODOS OS FILMES</button>
</div>
</body>


<?php require_once('footer.php'); ?>
