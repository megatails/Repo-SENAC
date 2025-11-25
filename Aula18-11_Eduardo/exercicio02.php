<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Exercicio 2</title>
</head>
    <header>
        <h1>Exercicio 2</h1>
    </header>
    <body>
        <form action="" method="POST">
            <h1>Insira quantos lados tem o seu<span style="color: lightgreen;">Objeto: </span>:</h1>

            <label for="num1">Insira o <span style="color: dodgerblue;"> primeiro</span> número: </label>
            <input type="number" name="num1" id="num1" required>

            <label for="num2">Insira o <span style="color: dodgerblue;"> segundo</span> número: </label>
            <input type="number" name="num2" id="num2" required>

            <label for="num3">Insira o <span style="color: dodgerblue;"> terceiro</span> número: </label>
            <input type="number" name="num3" id="num3" required>

            <label for="num4">Insira o <span style="color: dodgerblue;"> quarto</span> número: </label>
            <input type="number" name="num4" id="num4" required>

            <label for="num5">Insira o <span style="color: dodgerblue;"> quintoo</span> número: </label>
            <input type="number" name="num5" id="num5" required>


            <input class="arco-iris" type="submit" value="Par ou Impar?">
        </form>
    </body>
</html>

<?php
    $var1 = $_POST["num1"];
    $var2 = $_POST["num2"];
    $var3 = $_POST["num3"];
    $var4 = $_POST["num4"];
    $var5 = $_POST["num5"];
    $var6 = $_POST["num6"];

    if (is_numeric($var1)) {
        } else if (is_numeric($var2)) {
        } else if (is_numeric($var3)) {
        
    }
    else {
        echo "<h1 class='resposta'>O número é <span style:'color: hotpink'> Inválido</span></h1>"; 
    }

?>

<html>
    <body>
        <div class="credits">Developed by Rodrigo L. Cassilhas</div>
    </body>
</html>