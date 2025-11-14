<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Exercicio 8</title>
</head>
    <header>
        <h1>Exercicio 8</h1>
    </header>
    <body>
        <form action="" method="POST">
            <label for="num1">Insira o <span style="color: dodgerblue;"> número</span> desejado: </label>
            <input type="number" step="0.1" name="num1" id="num1" required>

            <input class="arco-iris" type="submit" value="é terminado em 0?">
        </form>
    </body>
</html>

<?php
    $var1 = (int) $_POST["num1"];

    if ($var1 != null) {

    
        if ($var1 % 10 == 0) {
            echo "<h1 class='resposta'>". "O ultimo número de " . "<span style='color: dodgerblue'>$var1</span>" . " é " . "<span style='color: crimson'> 0</span>";
        } 
        
        else {
            echo "<h1 class='resposta'>". "O ultimo número de " . "<span style='color: dodgerblue'>$var1 </span>" . " não é " . "<span style='color: crimson'> 0</span>";
        }
    }
?>

<html>
    <body>
        <div class="credits">Developed by Rodrigo L. Cassilhas</div>
    </body>
</html>