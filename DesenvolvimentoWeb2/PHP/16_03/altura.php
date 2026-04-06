<?php
    // COMENTÁRIOS EM LINHA//

    /*
    EXECICÍCIO 
    1- Declarar uma variavel cotendo meu nome.
    2- Declarar outra variavel com a altura em metro
    3- Declarar uma variável para o tamanho de um pé em centimetros (30.48)
    4- Armazenar em outra variável a altura convertida para pés.
    5- No HTML, exiba dentro de um PARÁGRAFO HTML a seguinte mensagem colocando as variáveis no lugar apropriado: "André tem 165 metro(s) de altura ou 6.0 pé(s)
    */

    $nome = 'André';
    $alturaM = 165;
    $pes = 30.48;
    $alturaP = (165*100)/30.48;
    $formatado = number_format($alturaP, 2, ",")
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Altura</title>
</head>
<body>
    <h1>Cálculo da altura em pés</h1>
    <?php
    

    echo "$nome tem $alturaM de altura ou $formatado em pés" 
    ?>
</body>
</html>