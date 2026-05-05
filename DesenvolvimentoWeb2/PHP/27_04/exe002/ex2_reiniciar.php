<?php 
    session_start();

    unset($_SESSION["contador"]);

    header("Location: correcao02.php");
?>