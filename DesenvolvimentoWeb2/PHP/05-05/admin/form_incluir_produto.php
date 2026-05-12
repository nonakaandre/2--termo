<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incluir Produto</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Fatec Shop - Área administrativa</h1>
    <h2>Incluir Produto</h2>
    <form action="incluir_produto.php">
        <div>
            <label for="nome">Nome do produto</label>
            <input type="text" id="nome" name="nome" size="50" maxlength="50">
        </div>
        <div>
            <label for="descricao">Descrição</label>
            <textarea name="descricao" id="descricao" rows="5" cols="50" maxlength="255" required></textarea>
        </div>
        <div>
            <label for="preco">Preço: R$</label>
            <input type="number" id="preco" name="preco" step="any" min="0" required>
        </div>
        <div>
            <label for="promocao">Em promoção</label>
            <select name="promocao" id="promocao" required>
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div>
            <label for="lancamento ">É lançamento?</label>
            <select name="lancamento " id="lancamento" required>
                <option value="0" selected>Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div>
            <button id="botao">Cadastrar</button>
        </div>
    </form>
</body>

</html>