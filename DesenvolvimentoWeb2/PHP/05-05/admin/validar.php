<?php 
   session_start();
    require("funcoes.php");

    $usuario = htmlspecialchars($_POST["usuario"]);
    $senha = htmlspecialchars($_POST["senha"]);

    if (validar_admin($_POST["usuario"], $_POST["senha"])) {
        $_SESSION["admin"] = true;
        header("Location: index.php");
    } else {
        header("Location: login.php?erro=1");
    }
    // se continar aqui, é porque o login falhou
    exit();
?>
<h1 style="color: red;">Acesso Negado</h1>