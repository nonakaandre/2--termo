<?php
    $notas = [];

    $nota1 = floatval($_POST["nota1"]);
    $nota2 = floatval($_POST["nota2"]);
    $nota3 = floatval($_POST["nota3"]);
    $nota4 = floatval($_POST["nota4"]);

    //for($i = 1; $i <= 4; $i++) {
       // $notas[] = $_POST["nota$i"];
    //}

    $notas = [$nota1, $nota2, $nota3, $nota4];

    $total = 0;
    foreach ($nota as $nota) {
        $total = $total + $nota;
    }
   
    $media = $total / sizeof($notas);

    if ($media >= 7) {
        $resultado = "APROVADO";
    } elseif ($media >= 5.0) {
        $resultado = "RECUPERAÇÃO";
    } else {
        $resultado = "REPROVADO";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF8">
        <title>Média das notas</title>
    </head>
    <body>
        <h1>Média das notas</h1>
        <h2>A média final é <?= $media ?> e o resultado é <?= $resultado ?></h2>
    </body>

</html>