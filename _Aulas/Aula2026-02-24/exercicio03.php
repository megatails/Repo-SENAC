<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
    <form action="" method="post">

    </form>
</body>
</html>

<?php
    $tabela = array();
    $tabela[0] = 32;
    $tabela[1] = 64;
    $tabela[2] = 128;
    $tabela[3] = 256;
    $tabela[4] = 512;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        for($i = 0; $i <= 4; $i++) {
            echo '['.$i.'] ' . $tabela[$i] . '<br>';
        }

        echo '<br>maior número:  ' . max($tabela);
    }
?>