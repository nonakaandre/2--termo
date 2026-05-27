<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Clientes</title>
    <style>
    body {
        font-family: sans-serif;
        padding: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 10px;
        border: 1px solid #ccc;
        text-align: left;
    }

    th {
        background-color: #f4f4f4;
    }

    .filtros {
        margin-bottom: 20px;
        display: flex;
        gap: 10px;
    }

    .filtros input {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .filtros button {
        padding: 8px 16px;
        background: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    </style>
</head>

<body>

    <h2>Meus Clientes</h2>

    <!-- Filtros -->
    <form method="POST" action="clientes.php">
        <div class="filtros">
            <input type="text" name="segmento" placeholder="Segmento (ex: Padaria)"
                value="<?= htmlspecialchars($segmento ?? '') ?>">
            <input type="text" name="localidade" placeholder="Localidade (ex: Marília)"
                value="<?= htmlspecialchars($localidade ?? '') ?>">
            <button type="submit">Filtrar</button>
            <a href="clientes.php"><button type="button">Limpar</button></a>
        </div>
    </form>

    <!-- Tabela de resultados -->
    <?php if (empty($clientes)): ?>
    <p>Nenhum cliente encontrado.</p>
    <?php else: ?>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Segmento</th>
                <th>Localidade</th>
                <th>Limite</th>
                <th>Utilizado</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $c): ?>
            <tr>
                <td><?= htmlspecialchars($c['nome']) ?></td>
                <td><?= htmlspecialchars($c['email']) ?></td>
                <td><?= htmlspecialchars($c['segmento']) ?></td>
                <td><?= htmlspecialchars($c['localidade']) ?></td>
                <td>R$ <?= number_format($c['limite'], 2, ',', '.') ?></td>
                <td>R$ <?= number_format($c['utilizado'], 2, ',', '.') ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php endif; ?>

</body>

</html>