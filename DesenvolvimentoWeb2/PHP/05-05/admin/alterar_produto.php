<?php 
    require("conexao.php");

    $id = intval(htmlspecialchars($_POST["id"]));
    $nome = htmlspecialchars($_POST["nome"]);
    $descricao = htmlspecialchars($_POST["descricao"]);
    $preco = floatval(htmlspecialchars($_POST["preco"]));
    $promocao = intval(htmlspecialchars($_POST["promocao"]));
    $lancamento = intval(htmlspecialchars($_POST["lancamento"]));

    $sql = "UPDATE produtos SET  nome = :nome, descricao = :descricao, preco = :preco, promocao = :promocao, lancamento = :lancamento WHERE id = :id";
    $comando = $pdo->prepare($sql);
    $comando->bindParam(":nome", $nome);
    $comando->bindParam(":descricao", $descricao);
    $comando->bindParam(":preco", $preco);
    $comando->bindParam(":promocao", $promocao);
    $comando->bindParam(":lancamento", $lancamento);
    $comando->bindParam(":id", $id);

    $sucesso = $comando->execute();
    if ($sucesso) {
        header("Location: listar_produtos.php");
    }

?>

<h1 style="color: red;">FALHA NA ALTERAÇÃO DO PRODUTO!!!</h1>