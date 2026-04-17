<?php

$pessoas = [];

$pessoas["nome"] = "Maria";
$pessoas["cidade"] = "Marília";
$pessoas["idade"] = 19;
$pessoas["altura"] = 1.65;

//OUTRAFORMA DE CRIAR UM ARRAY ASSOCIATIVO
$produto = [
    "codigo" => 1,
    "nome" => "Notebook Lenovo",
    "categoria"=> "Informática",
    "Preço" => 2999.9,
    "avaliação" => 4.7
];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores associativos</title>
</head>
<body>
    <h1>Vetores associativos em PHP</h1>
    <ul>
        <li>Nome: <?= $pessoas["nome"] ?></li>
        <li>Cidade: <?= $pessoas["cidade"] ?></li>
        <li>Idade: <?= $pessoas["idade"] ?></li>
        <li><?= $pessoas["altura"] ?></li>
    </ul>

    <h2>Percorrendo um array associativo automaticamente</h2>
    <ul>
    <?php foreach($produto as $chave => $valor) { ?>
        <li><?=$chave ?>: <?=$valor ?>:</li>
        <?php } ?>
        </ul>
</body>
</html>