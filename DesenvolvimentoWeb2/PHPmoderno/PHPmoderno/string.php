<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings em PHP</title>
</head>

<body>
    <h1>Strings em PHP</h1>
    <p>Em PHP, uma string é uma sequência de caracteres. Você pode criar strings usando aspas simples ('') ou aspas
        duplas ("").</p>
    <?php
    $simples = 'André \u{1F600}';
    $dupla = "André \u{1F600}"; 
    echo $simples. "<br>";
    echo $dupla . "<br><br>";
    ?>
    <br>
    <?php
        const CANAL = "Curso em Vídeo \u{1F499}";
        echo "Eu adoro o " . CANAL;
    ?>
</body>

</html>