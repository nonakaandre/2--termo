<?php 
    session_start();

    $_SESSION["nome"] = htmlspecialchars($_POST["nome"]);
    $_SESSION["email"] = htmlspecialchars($_POST["email"]);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Cadastro</h1>
    <form action="exe05-etapa3.php" method="post">
        <fieldset>
            <legend>Etapa 3</legend>
            <div>
                <label for="cidade">Cidade</label>
                <input type="text" id="cidade" name="cidade" required>
            </div>
            <div>
                <label for="estado">Estado</label>
                <select name="estado" id="estado">
                    <option>Bahia</option>
                    <option>Ceará</option>
                    <option>Minas Gerais</option>
                    <option selected>São Paulo</option>
                </select>
            </div>
            <button>Avançar</button>
        </fieldset>
    </form>
</body>

</html>