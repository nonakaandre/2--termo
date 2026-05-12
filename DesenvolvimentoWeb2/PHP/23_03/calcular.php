<?php
    $operacao = $_POST["operacao"];
    $numero1 = floatval($_POST["numero1"]);
    $numero2 = floatval($_POST["numero2"]);

    if ($operacao == "+") {
        $resultado = $numero1 + $numero2;
    } 
    else if ($operacao == "-") {
        $resultado = $numero1 - $numero2;
    }
    else if ($operacao == "*") {
        $resultado = $numero1 * $numero2;
    }
    else if ($operacao == "/") {
        $resultado = $numero1 / $numero2;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>/
    <h2> <?= $numero1 ?> <?= $operacao ?> <?= $numero2 ?> = <?= $resultado ?> </h2>
</body>
</html>