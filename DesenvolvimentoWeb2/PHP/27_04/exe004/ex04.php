<?php 
 session_start();

 if (!isset($_SESSION["tema"])) {
    $_SESSION["tema"] = "claro";
 }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ex04estilos.css">
</head>

<body class=<?= $_SESSION["tema"] ?>>
    <h1>Tema PHP</h1>
    <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi deleniti quo error nihil officiis itaque quibusdam
        nam facilis. Neque, dolorum inventore. Ipsam molestiae, accusamus cum esse pariatur eos vitae ea. Lorem ipsum
        dolor sit amet consectetur adipisicing elit. Animi aut voluptates ea beatae magnam? Neque esse obcaecati quasi
        temporibus magni cumque, voluptatum tempora quas, consectetur omnis itaque repellendus! Officiis, veritatis.
    </P>
    <form action="ex04_mudar_estilo.php">
        <button type="submit" name="btn_claro">Tema claro</button>
        <button type="submit" name="btn_escuro">Tema escuro</button>
    </form>

</body>

</html>