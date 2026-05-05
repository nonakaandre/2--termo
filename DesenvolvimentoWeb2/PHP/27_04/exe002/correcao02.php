<?php 
    session_start();

    if (isset($_SESSION["contador"])) {
        $_SESSION["contador"]++;
    } else {
        $_SESSION["contador"] = 1;
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador PHP</title>
</head>

<body>
    <h1>Contador de sessao</h1>
    <p>Você acessou esta página <?= $_SESSION["contador"]; ?> vez(es) nesta sessão</p>
    <p><a href="ex2_reiniciar.php">Reiniciar o contador</a></p>

</body>

</html>