<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Exercicio 5</title>
</head>
    <header>
        <h1>Exercicio 5</h1>
        <h2>Contagem Regressiva!!</h2>
    </header>
</html>

<?php
    $contador = 11;
    $horario = time();

    
    while ($contador > 0) {
        
        $contador--; 
        echo "<h1 class='resposta'>Número: $contador <br></h1>";
        
    }
    

    function wait(int $millisecond = 0) {
    if (0 !== $millisecond) {
        $seconds = (int) ($millisecond / 1000);
        $nanoSeconds = ($millisecond % 1000) * 1000000;
        time_nanosleep($seconds, $nanoSeconds);
    }
}
    
?>

<html>
    <body>
        <div class="credits">Developed by Rodrigo L. Cassilhas</div>
    </body>
</html>