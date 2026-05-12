<?php 
 session_start();

 if (isset($_GET["btn_claro"])) {
    $_SESSION["tema"] = "claro";
 } else if (isset($_GET["btn_escuro"])) {
    $_SESSION["tema"] = "escuro";
 }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Página inicial com tema</title>
    <link rel="stylesheet" href="ex04estilos.css">
</head>

<body class="<?= $_SESSION["tema"] ?>">
    <h1>Página inicial com tema </h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta doloribus accusantium libero, porro est magnam
        officia! Fuga, expedita. Saepe officia labore fugit. Modi saepe ipsa labore! Commodi sit odio cum!</p>
    <h2>não gostou? Volte ou clique abaixo para mudar</h2>
    <p><a href="ex04.php">Voltar para o inicio</a></p>

</body>

</html>