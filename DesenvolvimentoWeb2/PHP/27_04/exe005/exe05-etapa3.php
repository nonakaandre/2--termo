<?php 
    session_start();

    $_SESSION["cidade"] = htmlspecialchars($_POST["cidade"]);
    $_SESSION["estado"] = htmlspecialchars($_POST["estado"]);
 ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro etapa 3</title>
</head>

<body>
    <h1>Cadastro</h1>
    <h2>Etapa 3 - Confirme seus dados:</h2>
    <table border="1">
        <tr>
            <th>Nome:</th>
            <td><?php echo $_SESSION["nome"]; ?></td>
        </tr>
        <tr>
            <th>Email:</th>
            <td><?= $_SESSION["email"]; ?> </td>
        </tr>
        <tr>
            <th>Cidade:</th>
            <td><?php echo $_SESSION["cidade"]; ?></td>
        </tr>
        <tr>
            <th>Estado:</th>
            <td><?php echo $_SESSION["estado"]; ?></td>
        </tr>

    </table>

</body>

</html>