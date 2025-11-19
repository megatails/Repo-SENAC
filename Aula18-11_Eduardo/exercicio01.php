<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Exercicio 1</title>
</head>
    <header>
        <h1>Exercicio 1</h1>
    </header>
    <body>
        <form action="" method="POST">
            <label for="num1">Insira o <span style="color: dodgerblue;">primeiro</span> número: </label>
            <input type="number" name="num1" id="num1" required>

            <label for="num2">Insira o <span style="color: crimson;">segundo</span> número: </label>
            <input type="number" name="num2" id="num2" required><br>


            <input class="arco-iris" type="submit" value="Qual o maior?">
        </form>
    </body>
</html>

<?php
    $var1 = $_POST["num1"];
    $var2 = $_POST["num2"];


    if ($var1 != null) {

    
        if ($var1 >= $var2) {
            echo "<h1 class='resposta'><span style='color: dodgerblue'>$var1</span>" . " é maior que " . "<span style='color: crimson'>$var2</span></h1>";
        } else {
            echo "<h1 class='resposta'><span style='color: crimson'>$var2</span>" . " é maior que " . "<span style='color: dodgerblue'>$var1</span></h1>";
        }
    }
?>

<html>
    <body>
        <div class="credits">Developed by Rodrigo L. Cassilhas</div>
    </body>
</html>