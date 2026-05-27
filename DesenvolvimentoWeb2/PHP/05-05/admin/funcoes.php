<?php 
    function validar_admin($usuario, $senha) {
        if ($usuario == "admin" && $senha == "1234") {
            return true;
        } else {
            return false;
        }
    }

    function autenticar() {
        session_start();
        // Verificar se o usuário está autenticado, se não estiver, redirecionar para a página de login
        if (!isset($_SESSION["admin"])) {
            header("Location: login.php");
        }
    }
?>