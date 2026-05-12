<?php 
    require_once "conexao.php";
    
    $sql = "SELECT * FROM produtos"; //String com o comando SQL para selecionar todos os produtos
    $comado = $pdo->query($sql); // Montamos o comando SQL e executamos a consulta
    $resultado = $comado->fetchAll(); // Executamos o comando e armazenamos o resultado em uma variável
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produtos</title>
</head>

<body>
    <h1>FatecShop - Área Administrador</h1>
    <h2>listagem de Produtos Cadastrados</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>EM PROMOÇÃO</th>
            <th>É LANÇAMENTO?</th>
        </tr>
        <?php foreach($resultado as $produto) {?>
        <tr>
            <td><?= $produto["id"]; ?></td>
            <td><?= $produto["nome"]; ?></td>
            <td><?= $produto["descricao"]; ?></td>
            <td><?= $produto["preco"]; ?></td>
            <td><?= $produto["em_promocao"] ?></td>
            <td><?= $produto["lancamento"] ?></td>
        </tr>
        <?php } ?>
    </table>
</body>

</html>