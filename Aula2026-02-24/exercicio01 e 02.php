<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1 e 02</title>
</head>
<body>
    <form action="" method="post">

    </form>
</body>
</html>

<?php
    $tabela = array();
    $tabela[0] = 2;
    $tabela[1] = 4;
    $tabela[2] = 6;
    $tabela[3] = 8;
    $tabela[4] = 10;
    $tabela[5] = 12;
    $tabela[6] = 14;
    $tabela[7] = 16;
    $tabela[8] = 18;
    $tabela[9] = 20;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        for($i = 0; $i <= 9; $i++) {
            echo '['.$i.'] ' . $tabela[$i] . '<br>';
        }

        
        $media = array_sum($tabela)/count($tabela);
        echo '<br>média do array: ' . $media;
        echo '<br>soma do array: ' . array_sum($tabela);
    }
?>