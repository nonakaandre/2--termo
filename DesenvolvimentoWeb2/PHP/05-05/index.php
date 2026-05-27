<?php 
    require("./admin/conexao.php");

    $sql = "SELECT * FROM produtos ORDER BY nome";
    $comando = $pdo->query($sql); //preparams com comando
    $resultados = $comando->fetchAll(); //fetchall para pegar tudo e associativo para pegar por nome
    //executmos o comando e pegamos os resultados, agora temos um veto associativo com os produtos do banco de dados

    $sql_ofertas = "SELECT * FROM produtos WHERE promocao = true";
    $comando_ofertas = $pdo->query($sql_ofertas);
    $res_ofertas = $comando_ofertas->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>FatecShop</title>
</head>
<style>

</style>

<body>
    <header>
        <img src="" alt="">
        <h1>FatecShop</h1>
        <p>Aqui tudo é mais barato</p>
    </header>
    <nav>
        <ul>
            <li><a href="">Inicio</a></li>
            <li><a href="">Produtos</a></li>
            <li><a href="">Ofertas</a></li>
            <li><a href="">Lançamentos</a></li>
            <li><a href="">Carrinho</a></li>
            <li><a href="">Ajuda</a></li>
        </ul>
    </nav>

    <main>
        <h2>Lançamentos</h2>
        <section id="lancamentos">
            <?php foreach ($resultados as $produto) { ?>
            <div class="card">
                <img src="img/<?= $produto["id"] ?>" alt="Notebook Lenovo">
                <h3>
                    <?= $produto["nome"]; ?>
                </h3>
                <p>
                    <?= $produto["descricao"]; ?>
                </p>
                <span>R$
                    <?= number_format($produto["preco"], 2, ",", "."); ?>
                </span>
                <button>Comprar</button>
            </div>
            <?php } ?>
        </section>

        <h2>Ofertas</h2>

        <section id="ofertas">
            <div class="card">
                <img src="" alt="Notebook Lenovo">
                <h3>Notebook Lenovo V15</h3>
                <p>Intel i3, 8GB RAM, SSD 256GB</p>
                <span>R$ 2.899</span>
                <button>Comprar</button>
            </div>

            <div class="card">
                <img src="" alt="Notebook HP">
                <h3>Notebook HP 256 G9</h3>
                <p>Intel i5, 8GB RAM, SSD 256GB</p>
                <span>R$ 3.599</span>
                <button>Comprar</button>
            </div>

            <div class="card">
                <img src="" alt="Notebook Acer">
                <h3>Notebook Acer Nitro 5</h3>
                <p>Ryzen 7, 16GB RAM, RTX 3050</p>
                <span>R$ 5.499</span>
                <button>Comprar</button>
            </div>

            <!-- NOVOS -->
            <div class="card">
                <img src="" alt="Notebook Asus Gamer">
                <h3>Asus TUF Gaming</h3>
                <p>Intel i7, 16GB RAM, RTX 4060</p>
                <span>R$ 6.999</span>
                <button>Comprar</button>
            </div>

            <div class="card">
                <img src="" alt="Notebook Positivo">
                <h3>Positivo Vision C15</h3>
                <p>Intel Celeron, 4GB RAM, SSD 128GB</p>
                <span>R$ 1.899</span>
                <button>Comprar</button>
            </div>

            <div class="card">
                <img src="" alt="Notebook LG">
                <h3>LG Gram</h3>
                <p>Intel i7, 16GB RAM, SSD 1TB</p>
                <span>R$ 7.499</span>
                <button>Comprar</button>
            </div>
        </section>
    </main>
    <footer>
        <div id="redes">
            <ul>
                <li>Instagram</li>
                <li>Facebook</li>
                <li>TikTok</li>
            </ul>
        </div>
        <address>
            Av. das Univercidades,1234 Marília-SP CEP12345-000
        </address>
    </footer>
</body>

</html>