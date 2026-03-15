<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms com php</title>
</head>
<body>
    <h1>Form com php</h1>

    <form action="cumprimentar.php">
        <div>
            <label for="nome">Qual é seu nome?</label>
            <input type="text" name="nome" id="nome">
        </div>
        <div>
            <label for="idade">Qual a sua idade?</label>
            <input type="number" name="idade" id="idade">
        </div>
        <button>Enviar</button>
    </form>
    
</body>
</html>