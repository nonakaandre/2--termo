<?php 
session_start();
session_destroy();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>reset</title>
</head>

<body>
    <h1>Reset executado com sucesso!!!</h1>

    <form action="visitas.html">
        <p>CLIQUE NO BOTÃO PARA VOLTAR PARA HOME</p>
        <button>HOME</button>
    </form>
</body>

</html>