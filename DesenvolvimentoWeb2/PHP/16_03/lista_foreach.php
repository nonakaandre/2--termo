<?php
    $curso = "Desenvolvimento de Software Multiplataforma";

    $aprovados = [
        "Maria da Silva",
        "Patricia Nonaka",
        "Isabella Harumi",
        "José Pedro",
        "Daniele Etsuko",
        "Rodrigo Enji"
    ];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista em PHP</title>
</head>
<body>
    <h1>Lista em PHP</h1>
    <h2>Aprovados em</h2> <?=  $curso; ?>
    <ol>
        <?php foreach ($aprovados as $pessoa) { ?>
            <li><?= $pessoa ?></li>
            <?php } ?>
    </ol>
    <p>Quantidade total de aprovados: <?= sizeof($aprovados) ?></p>
</body>
</html>