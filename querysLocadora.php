<?php
include_once 'conBancoLocadora.php';
$categorias = $conn->prepare("SELECT  nome FROM categoria;");
$categorias->execute();
$todasCategorias = $categorias->fetchAll();

$categoriaFilme = $conn->prepare("SELECT
    c.nome,
    f.titulo,
    f.descricao,
    f.ano_de_lancamento,
    f.idioma_id,
    f.idioma_original_id,
    f.duracao_da_locacao,
    f.preco_da_locacao,
    f.duracao_do_filme,
    f.custo_de_substituicao,
    f.classificacao,
    f.recursos_especiais
FROM
    categoria c
        LEFT JOIN
    filme_categoria fc ON c.categoria_id = fc.categoria_id
        LEFT JOIN
    filme f ON f.filme_id = fc.filme_id;");
$categoriaFilme->execute();
$todosFilmes = $categoriaFilme->fetchAll();

$precoFilme = $conn->prepare("SELECT titulo, descricao, ano_de_lancamento, preco_da_locacao
FROM filme
ORDER BY preco_da_locacao ASC;");
$precoFilme->execute();
$todosPrecosFilmes = $precoFilme->fetchAll();

// echo '<pre>';
// var_dump($todosPrecosFilmes);
