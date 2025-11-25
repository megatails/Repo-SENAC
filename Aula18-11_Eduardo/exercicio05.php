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
    </header>
    <body>
        <form action="" method="POST">
            <label for="num1">Quantos <span style="color: dodgerblue;">anos</span> você tem?</label>
            <input type="number" name="num1" id="num1" required>
            
            <label for="num2">Qual o valor do <span style="color: dodgerblue;">ingresso</span>?</label>
            <input type="number" step="0.01" name="num2" id="num2" required>

            <input class="arco-iris" type="submit" value="Descubra seu valor?">
        </form>
    </body>
</html>

<?php
    $var1 = $_POST["num1"];
    $var2 = $_POST["num2"];

    if ($var1 < 12) {
        echo "<h1 class='resposta'>Você é uma Criança! O valor do seu ingresso é: <span style='color: dodgerblue'> " . $var2 / 2 . "</span></h1>";
    } else if ($var1 >= 60) {
        echo "<h1 class='resposta'>Você é um <span style='color: lightgray'>💀 Velho ⚰️</span>! O valor do seu ingresso é: <span style='color: dodgerblue'> " . $var2 * 0.70 . "</span></h1>";
    } else {
        echo "<h1 class='resposta'>Você é um Adulto! O valor do seu ingresso é: <span style='color: dodgerblue'> " . $var2 . "</span></h1>";
    }

?>

<html>
    <body>
        <div class="credits">Developed by Rodrigo L. Cassilhas</div>
    </body>
</html>