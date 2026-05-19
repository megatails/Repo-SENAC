<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
</head>
<body>
    <form action="" method="post">

    </form>
</body>
</html>

<?php
    $tabela = array();
    $tabela[0] = 0;
    $tabela[1] = 4;
    $tabela[2] = 8;
    $tabela[3] = 16;
    $tabela[4] = 30;
    $tabela[5] = 64;
    $tabela[6] = 128;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        for($i = 0; $i <= 6; $i++) {
            echo '['.$i.'] ' . $tabela[$i] . '<br>';
        }
        echo '<br>O número 30 está na posição ' . '[' . array_search(30, $tabela). ']';

    }
?>