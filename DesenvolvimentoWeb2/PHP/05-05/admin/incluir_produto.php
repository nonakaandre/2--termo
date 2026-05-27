<?php
require("conexao.php");
    // recebemos os dados do formulário
    $nome = htmlspecialchars($_POST["nome"]);
    $descricao = htmlspecialchars($_POST["descricao"]);
    $preco = floatval(htmlspecialchars($_POST["preco"]));
    $promocao = intval($_POST["promocao"]);
    $lancamento = intval($_POST["lancamento"]);

    $sql = " INSERT INTO produtos (nome, descricao, preco, promocao, lancamento) " . "VALUES (?, ?, ?, ?, ?)";
 
    $comando = $pdo->prepare($sql);
    $comando->bindValue(1, $nome);
    $comando->bindValue(2, $descricao);
    $comando->bindValue(3, $preco); 
    $comando->bindValue(4, $promocao);
    $comando->bindValue(5, $lancamento);

    $sucesso = $comando->execute();
    if ($sucesso) {
        header("Location: listar_produtos.php");
    } 
?>
<h1 style="color: red">FALHA NA INCLUSÃO</h1>