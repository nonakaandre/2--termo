<?php
session_start();
    $_SESSION["usuario"] = $_GET["user"];
    $_SESSION["cidade"] = $_GET["cidade"];
?>
<h1>Bem-vindo, <?= $_SESSION["usuario"]; ?> ,
    da cidade de <?= $_SESSION["cidade"]; ?>!
</h1>
<p>
    <a href="com_sessao2.php">Clique aqui</a>
    para continuar no site.
</p>