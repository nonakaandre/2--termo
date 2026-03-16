<?php
    // RECEBEMOS E TRATAMOS OS DADOS DO FORMULÁRIO ANTES DE USÁ-LOS.
    $nome = strtoupper(htmlspecialchars($_GET["nome"]));
    $email = htmlspecialchars($_GET["email"]);
    $cidade = strtolower(htmlspecialchars($_GET["cidade"]));
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro em PHP</title>
</head>
<body>
    <h1>Dados Cadastrados</h1>
    <table>
        <tr>
            <th>NOME</th>
            <th>E-MAIL</th>
            <th>CIDADE</th>
        </tr>
        <tr>
            <td><?= $nome ?></td>
            <td><?= $email ?></td>
            <td><?= $cidade ?></td>
        </tr>
    </table>
</body>
</html>
