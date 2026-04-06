<?php
$selecao = [];
    // RECEBEMOS E TRATAMOS OS DADOS DO FORMULÁRIO ANTES DE USÁ-LOS.
    $nome = htmlspecialchars(strtoupper($_POST["nome"]));
    $email = htmlspecialchars($_POST["email"]);
    $cidade = strtolower(htmlspecialchars($_POST["cidade"]));
    $estado = htmlspecialchars($_POST["estado"]);
    $data = htmlspecialchars($_POST["nascimento"]);
    // FORMATANDO DATA
    $dataFormatada = (date("d/m/Y", strtotime($data)));
    // TRATANDO A SENHA COM CRIPTOGRAFIA
    $senha = md5(htmlspecialchars($_POST["senha"]));
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro em PHP</title>
    <style>
       
    </style>
</head>
<body>
    <h1>Dados Cadastrados</h1>
    <table>
        <tr>
            <th>NOME</th>
            <th>E-MAIL</th>
            <th>CIDADE</th>
            <th>ESTADO</th>
            <th>DATA DE NASCIMENTO</th>
            <th>SENHA</th>
        </tr>
        <tr>
            <td><?= $nome ?></td>
            <td><?= $email ?></td>
            <td><?= $cidade ?></td>
            <td><?= $estado ?> </td>
            <td><?= $dataFormatada ?> </td>
            <td><?= $senha ?> </td>
            
        </tr>
    </table>
</body>
</html>
