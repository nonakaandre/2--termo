<?php session_start();?>
<h1>
    Que bom que você ainda está conosco, <?= $_SESSION["usuario"]; ?>, de <?= $_SESSION["cidade"]; ?>!!!
</h1>

<p>
    <a href="com_sessao3.php">Clique aqui para sair(logout)</a>
    
</p>