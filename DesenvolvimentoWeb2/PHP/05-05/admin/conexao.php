<?php 
    $tipo_banco = "mariaDB";  // banco de dados utilizado (mysql, postgresql, etc.)
    $servidor = "localhost"; // endereço do servidor de banco de dados
    $porta    = "3306";      // porta de conexão com o banco de dados
    $banco    = "loja"; // Nome do banco de dados
    $usuario  = "php";      // usuário do banco de dados
    $senha    = "senha123";         // senha do banco de dados

    // montamos a DSN (uma string que informa á biblioteca dados sobre o banco)
    $dsn = "$tipo_banco:host=$servidor;port=$porta;dbname=$banco";

    try {
        $pdo = new PDO($dsn, $usuario, $senha);
    } catch (PDOException $e) {
       // die("Falha ao conectar ao banco de dados: " . $e->getMessage());
        echo "Falha ao conectar ao banco de dados: " . $e->getMessage();
        exit();
    }
?>