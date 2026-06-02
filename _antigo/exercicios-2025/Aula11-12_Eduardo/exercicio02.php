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
            <label for="num1">Insira o <span style="color: dodgerblue;"> número: </span></label>
            <input type="number" name="num1" id="num1" required>

            <input class="arco-iris" type="submit" value="Par ou Impar?">
        </form>
    </body>
</html>

<?php
    $var1 = $_POST["num1"];


    if ($var1 != null) {

    
        if ($var1 % 2== 0) {
            echo "<h1 class='resposta'>". "O número " . "<span style='color: dodgerblue'>$var1</span>" . " é " . "<span style='color: crimson'>> Par <</span></h1>";
        } else {
            echo "<h1 class='resposta'>". "O número " . "<span style='color: dodgerblue'>$var1</span>" . " é " . "<span style='color: crimson'>> Impar <</span></h1>";
        }
    }
?>

<html>
    <body>
        <div class="credits">Developed by Rodrigo L. Cassilhas</div>
    </body>
</html>