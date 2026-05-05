<?php 
session_start();

if (!isset($_SESSION["logado"])) {
    // VARIAVEL DE SESSAO NÃO SETADA: USUÁRIO NÃO FEZ O LOGIN
    // REDIRECIONAMOS ELE PAPRA O FORM.HTML
    header("Location: form.html");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Principal</title>
</head>

<body>
    <h1>Painel Principal</h1>
    <h2>Menu</h2>
    <ul>
        <li>Cadastrar</li>
        <li>Consultar</li>
    </ul>
    <a href="sair.php">Sair</a>
</body>

</html>