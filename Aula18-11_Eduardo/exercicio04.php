<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Exercicio 4</title>
</head>
    <header>
        <h1>Exercicio 4</h1>
    </header>
    <body>
        <form action="" method="POST">
            <h1>Digite os lados do seu<span class="arco-iris"> Triangulo: </span></h1>
            <label for="num1">Digite o <span style="color: lightpink;">Primeiro</span> número:</label>
            <input type="number" name="num1" id="num1" required>

            <label for="num2">Digite o <span style="color: lightgreen;">Segundo</span> número:</label>
            <input type="number" name="num2" id="num2" required>

            <label for="num3">Digite o <span style="color: lightblue;">Terceiro</span> número:</label>
            <input type="number" name="num3" id="num3" required>

            <h1>Qual Será o tipo do Triangulo?</h1>

            <input class="arco-iris" type="submit" value="Descubra?">
        </form>
    </body>
</html>

<?php
    $var1 = $_POST["num1"];
    $var2 = $_POST["num2"];
    $var3 = $_POST["num3"];


    if ($var1 != 0) {
        if ($var1 == $var2 && $var2 == $var3) {
        echo "<h1 class='resposta'>O Triângulo é <span style:'color: lightpink'> Equilátero</span></h1>"; 
    } else if (($var1 == $var2 || $var1 == $var3 || $var2 == $var3) && ($var1 != $var3 || $var1 != $var2 || $var2 != $var3)) {
        echo "<h1 class='resposta'>O Triângulo é <span style:'color: lightgreen'> Isósceles</span></h1>"; 
    }   else {
        echo "<h1 class='resposta'>O Triângulo é <span style:'color: lightblue'> Escaleno</span></h1>"; 
    }
}
?>

<html>
    <body>
        <div class="credits">Developed by Rodrigo L. Cassilhas</div>
    </body>
</html>