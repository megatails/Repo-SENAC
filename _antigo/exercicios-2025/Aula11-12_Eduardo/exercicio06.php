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
            <label for="num1">Insira o valor de <span style="color: dodgerblue;">A</span></label>
            <input type="number" name="num1" id="num1" required>

            <label for="num2">Insira o valor de <span style="color: crimson;">B</span></label>
            <input type="number" name="num2" id="num2" required>

            <label for="num3">Insira o valor de <span style="color: violet;">C</span></label>
            <input type="number" name="num3" id="num3" required><br>


            <input class="arco-iris" type="submit" value="Qual o maior número?">
        </form>
    </body>
</html>

<?php
    $a = $_POST["num1"];
    $b = $_POST["num2"];
    $c = $_POST["num3"];

    //A 7
    //B 4
    //C 2

if ($a != $b && $a != $c && $b != $c) {
    if ($a > $b && $b > $c) {
        echo "<h1 class='resposta'> A é o maior</h1>";
        } 
        elseif ($a < $b && $c < $b) {
            echo "<h1 class='resposta'> B é o maior</h1>";
        }
        else  {
            echo "<h1 class='resposta'> C é o maior</h1>";
        }
}
else {
    echo "<h1 class='resposta'>Há número repetidos! <br> tente números diferentes<h1>";
}
?>

<html>
    <body>
        <div class="credits">Developed by Rodrigo L. Cassilhas</div>
    </body>
</html>