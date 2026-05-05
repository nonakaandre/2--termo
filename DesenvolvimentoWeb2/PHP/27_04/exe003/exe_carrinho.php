<?php 
    session_start();


if (!isset($_SESSION["carrinho"])){
    $_SESSION["carrinho"] = [];
} 

if (isset($_GET['produto'])) {
    array_push($_SESSION["carrinho"], $_GET["produto"]);
}

 ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de compras</title>
</head>

<body>
    <h1>Carrinho de compras</h1>
    <p>
        Você tem
        <? sizeof($_SESSION["carrinho"]) ?> produto(s) no seu carrinho:
    </p>
    <ul>
        <?php 
        foreach ($_SESSION["carrinho"] as $elemento) {  ?>
        <li><?= $elemento ?></li>
        <?php } ?>
    </ul>
    <p><a href="carrinho.html">Voltar para home</a></p>
</body>

</html>