<?php
    $temperatura = $_GET["temperatura"];
        
    if($temperatura == "") {
       $resposta = "O campo não pode ser vazio!";

    } else {
        $temperaturaFloat = floatval($temperatura);
        $fahrenheit = ($temperatura * 1.8) + 32;
        $resposta = "$temperatura graus Celsius equivalem a $fahrenheit graus Fahrenheit.";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Conversor</title>
    </head>
    <body>
        <h1>Conversor de temperatura</h1>
        <p><?= $resposta ?></p>
    </body>

</html>