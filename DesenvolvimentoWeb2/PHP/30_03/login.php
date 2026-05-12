<?php 
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]); 
    
     if($email == "test@mail.com" && $password == 123456) {
        $css = "color: green";
        $mensagem = "Login efetuado com sucesso!";
        
    } else {
        $css = "color: red";
        $mensagem = "Dados divergentes, tente novamente!";
    } 
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Simples</title>
    </head>
    <body>
        <h1>Status login</h1>
        <h2 style="<?= $css ?>"><?= $mensagem?></h2>
    <?php
    ?> 
    </body>
</html>