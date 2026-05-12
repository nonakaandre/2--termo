<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "olá";
            $sobrenome = $_GET["sobrenome"] ?? "sem teto";
            echo "Seja bem vinda a aula de PHP  $nome $sobrenome";
        ?>
        <p><a href="javascript:history.go(-1)">Página anterior</a></p>
    </main>

</body>

</html>