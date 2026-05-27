<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Fatec Shop - Login</title>
</head>

<body>
    <h1>Fatec Shop - Área Administrativa</h1>
    <h2>Login</h2>
    <form action="validar.php" method="post">
        <div>
            <label for="usuario">Nome do usuário:</label>
            <input type="text" name="usuario" id="usuario" required>
        </div>
        <div>
            <label for="senha">Senha de acesso:</label>
            <input type="password" name="senha" id="senha" required>
        </div>
        <div>
            <button type="submit" id="botao">Entrar</button>
        </div>
    </form>
</body>

</html>