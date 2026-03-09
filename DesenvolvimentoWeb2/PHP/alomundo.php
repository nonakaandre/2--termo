<?php
   

    $preco = 29.90;
    $produto = "Pen drive 64 GB";
    $quantidade = 3;
    $total = $preco * $quantidade;

    $precof = number_format($preco, 2, ",");
    $total = number_format($total,2 , ",");

    

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alô Mundo em PHP</title>
</head>
<body>
    <?  echo "<h1>Alô Mundo</h1>";
        echo "Você comprou $quantidade unidade(s) de $produto por R$ $precof totalizando $total"
    ?>
</body>
</html>