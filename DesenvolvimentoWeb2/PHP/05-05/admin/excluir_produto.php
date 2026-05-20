<?php 
    require("conexao.php");

    //recebendo o id passaando pelo clique no link "Excluir"
    $id = intval(htmlspecialchars($_GET["id"]));

    $sql = "DELETE FROM produtos WHERE id = :id" ;
    $comando = $pdo->prepare($sql);
    $comando->bindParam(":id", $id);
    $sucesso = $comando->execute();

    if ($sucesso) {
        header("Location: listar_produtos.php");
    } else {
        echo "Falha ao excluir o produto.";
    }
?>