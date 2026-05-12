<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Etapa 1</title>
</head>

<body>
    <h1>Cadastro</h1>
    <form action="exe05_etapa2.php" method="post">
        <fieldset>
            <legend>Etapa 1</legend>
            <div>
                <label for="nome">Nome </label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <button>Avançar</button>
        </fieldset>
    </form>
</body>

</html>