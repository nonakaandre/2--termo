<?php 
session_start();


if (isset($_SESSION["contador"])) {
    $contagem = $_SESSION["contador"];
    $contagem++;
} else {
    $contagem = 1;
}
$_SESSION["contador"] = $contagem;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitas</title>
</head>

<body>
    <h1>Você visitou a página <?= $_SESSION["contador"] ?></h1>

    <form action="reset.php">
        <label for="reset">Zerar contador</label>
        <input type="submit" value="clique aqui" id="reset">
    </form>
</body>

</html>