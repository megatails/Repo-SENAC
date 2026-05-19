<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Exercicio 8</title>
</head>
    <header>
        <h1>Exercicio 8</h1>
    </header>
</html>

<?php
    $contador = 0;

    while ($contador < 30) {
        $contador++;
        if ($contador %2!= 0) {
        echo "<h1 class='resposta'>Número: $contador <br></h1>";
        }
    }
?>

<html>
    <body>
        <div class="credits">Developed by Rodrigo L. Cassilhas</div>
    </body>
</html>