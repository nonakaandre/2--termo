<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo com "for"</title>
</head>
<body>
  <h1>Exemplo com "for"</h1>  
  <h2>Contando de 1 a 10</h2>
  <?php
    for ($cont = 1; $cont <= 10; $cont++) {
        echo $cont, " ";
    }
    ?>
    <h2>Contagem regressiva em uma lista</h2>
    <ul>
      <?php  for($cont = 10; $cont >= 0; $cont--){ ?>
            <li> <?= $cont ?></li>
       <?php } ?>
    </ul>
    
</body>
</html>