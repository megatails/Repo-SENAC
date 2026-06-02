<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Exercicio 3</title>
</head>
    <header>
        <h1>Exercicio 3</h1>
        <h3>Tabuada do 5</h2>
    </header>
</html>

<?php
    $contador = 1;
    $produto = 5;


    while ($contador <= 10) {
        $tabuada = $produto * $contador;    
        $contador++;
        echo "<h1 class='resposta'>5x$contador = " . $tabuada . "<br></h1>";
    }
?>

<html>
    <body>
        <div class="credits">Developed by Rodrigo L. Cassilhas</div>
    </body>
</html>