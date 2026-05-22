<?php 
    session_start();
    require "conexao.php";
    
    $nome = htmlspecialchars($_POST["nome"]);
    $email = htmlspecialchars($_POST["email"]);
    $senha = htmlspecialchars($_POST["senha"]);

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
    $comando = $pdo->prepare($sql);
    $comando->bindParam(":nome", $nome);
    $comando->bindParam(":email", $email);
    $comando->bindParam(":senha", $senha);
    
    $sucesso = $comando->execute();
    if ($sucesso) {
        header("Location: login.html");
        exit;
    } else {
        echo "Erro ao realizar cadastro.";
    }
?>