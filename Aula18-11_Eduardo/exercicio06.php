<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Exercicio 6</title>
</head>
    <header>
        <h1>Exercicio 6</h1>
    </header>
    <body>
        <form action="" method="POST">
            <label for="num1">Insira o valor do seu <span style="color: dodgerblue;">Salário</span></label>
            <input type="number" step="0.01" name="num1" id="num1" required>



            <input class="arco-iris" type="submit" value="Calcular?">
        </form>
    </body>
</html>

<?php
    $var1 = $_POST["num1"];
    $desc = $var1*0.275;
    $result = $var1 - $desc;

    if ($var1 != null && $var1 != 0) 
    {
        if ($var1 <= 280.00) {
            echo "<h1 class='resposta'>O seu salario era: <span style='color: coral'>" .  $var1. "</span><br> portanto, será aumentado em<span style='color: lightgreen'>20%</span><br>". "Um aumento de <span style='color: lightskyblue'>". $var1 * 0.20 . "</span><br>Seu salario agora é: <span class='arco-iris'> " . $var1 * 1.20 . "</span></h1>";
        } else if ($var1 >= 280.01 && $var1 <= 699.99) {
            echo "<h1 class='resposta'>O seu salario era: <span style='color: coral'>" .  $var1. "</span><br> portanto, será aumentado em <span style='color: lightgreen'>15%</span><br>". "Um aumento de <span style='color: lightskyblue'>". $var1 * 0.15 . "</span><br>Seu salario agora é: <span class='arco-iris'> " . $var1 * 1.15 . "</span></h1>";
        } else if($var1 >= 700.00 && $var1 <= 1499.99) {
            echo "<h1 class='resposta'>O seu salario era: <span style='color: coral'>" .  $var1. "</span><br> portanto, será aumentado em <span style='color: lightgreen'>10%</span><br>". "Um aumento de <span style='color: lightskyblue'>". $var1 * 0.10 . "</span><br>Seu salario agora é: <span class='arco-iris'> " . $var1 * 1.10 . "</span></h1>";
        }
        else {
            echo "<h1 class='resposta'>O seu salario era: <span style='color: coral'>" .  $var1. "</span><br> portanto, será aumentado em <span style='color: lightgreen'>5%</span><br>". "Um aumento de <span style='color: lightskyblue'>". $var1 * 0.05 . "</span><br>Seu salario agora é: <span class='arco-iris'> " . $var1 * 1.05 . "</span></h1>";
        }
    }
?>

<html>
    <body>
        <div class="credits">Developed by Rodrigo L. Cassilhas</div>
    </body>
</html>