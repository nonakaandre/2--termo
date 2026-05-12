<?php
    session_start();

    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    if ($nome == "admin" && $senha == "1234"){
        $_SESSION["logado"] = $nome;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php if (isset($_SESSION["logado"])) { ?>
    <h1>Bem-vindo ao site, <?=   $_SESSION["logado"]?></h1>
    <?php  } else { ?>
    <h1 style="color: red">Acesso Inválido </h1>
    <?php } ?>
</body>

</html>