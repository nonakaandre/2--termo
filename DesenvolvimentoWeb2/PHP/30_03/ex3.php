<?php
    $tabuada = intval($_POST["tabuada"]);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Gerador de tabuada</title>
    </head>
    <body>
        <h1>Gerador de tabuada</h1>
        <h2>Tabuada do <?= $tabuada ?></h2>
        <table border="1">
            <?php for ($contador = 1; $contador <=10; $contador++) { ?>
                <tr>
                    <td>
                        <?= $tabuada ?> x <?= $contador ?> = <?= $contador * $tabuada ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>