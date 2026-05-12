<?php
    $inicio = intval($_GET["inicio"]);
    $final = intval($_GET["final"]);
    $soma = $inicio + $final;

    
    
/* ADICIONAR A POSSIBILIDADE DE COLOCAR O NÚMERO INICIAL
MUDAR O CÓDIGO PHP PARA CONTAR DO NÚMERO INICIAL FORNECIDO ATÉ O FINAL 
ACRESCENTE AS SEGUINTES VALIDAÇÕES (USANDO IF):
    - NÃO CONTE SE O NÚMERO INICIAL FOR MAIOR DO QUE O FINAL
    - NÃO CONTE SE A QUANTIDADE DE CONTAGENS (NÚMERO FINAL MENOS O 
    NÚMERO INICIAL FOR SUPERIOR A 1000)
*/
?>


<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Contador</title>
    </head>
    <style>
        .alerta {
            color: red;
            font-size: 30px;
        }
        
    </style>
    <body>
        <h1>Contando de <?= $inicio ?> a <?= $final ?></h1>
        <?php
            if ($inicio >= $final) {
                 echo "<div class= 'alerta'>O número inicial tem que ser maior que o final!!!</div>";
             }
             else if ($soma >= 1000) {
                echo "<div class= 'alerta'>O intervalo entre os números deve ser menor que mil!!!</div>$soma";
             } else {
                 while ($inicio <= $final) {
                echo "$inicio - <display: flex;>";
                $inicio++;
            }
             }
           
            ?>
    </body>
</html>