<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
</head>
<body>
    <form action="" method="post">

    </form>
</body>
</html>

<?php
    $tabela = array();
    $tabela[0] = 'Gabriel Fernandes';
    $tabela[1] = 'Walter Paupitz';
    $tabela[2] = 'Bianka Pinheiro Matos';
    $tabela[3] = 'Barbara Oliveira';
    $tabela[4] = 'Rodrigo Leite Cassilhas';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        for($i = 0; $i <= 4; $i++) {
            echo '['.$i.'] ' . $tabela[$i] . '<br>';
        }
        echo '<br>';
        for($n = 4; $n <= 4 && $n >= 0; $n--) {
            echo '['.$n.'] ' . $tabela[$n] . '<br>';
        }
    }
?>