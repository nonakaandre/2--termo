<?php
    $nome = htmlspecialchars($_POST["nome"]);
    $nota1 = floatval($_POST["nota1"]) ;
    $nota2 = floatval($_POST["nota2"]);

    $media = ($nota1 + $nota2) / 2;

    if($media >= 6) {
        $resultado = "APROVADO(A)";
    } else {
        $resultado = "REPROVADO(A)";
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da média</title>
</head>
<body>
    <h1>Resultado da média</h1>
    <p>
        Aluno(a) <?= $nota ?> obteve média <?= $media ?> e está <?= $resultado ?>
    </p>
</body>
</html>