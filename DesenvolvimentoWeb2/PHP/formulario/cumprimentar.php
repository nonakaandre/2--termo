<?php
    $nome = $_GET["nome"];
    $idade = intval( $_GET["idade"]);
    $diasVividos = $idade * 365;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebendo dados do formulário</title>
</head>
<body>
    <h1>Recebendo dados do formulário</h1>
     <p>
        Prazer em conhecê-lo, <?= $name ?> !
        Você já viveu pelo menos <?= $diasVividos ?> anos!
     </p>
</body>
</html>