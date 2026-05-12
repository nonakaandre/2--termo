<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF8">
    <title>Me livrando da </title>
</head>

<body>
    <h1>
        <?php
                date_default_timezone_set('America/Sao_Paulo');
                echo "Hoje é dia " . date('d/M/y');
                echo " e agora são " . date('H:i:s T');
            ?>
    </h1>

</body>

</html>