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
            <label for="num1">Qual a <span class="arco-iris"><temp>temperatura</temp></span> de hoje? </label>
            <input type="number" name="num1" id="num1" required>


            <input class="botao" type="submit" value="Descubra">
        </form>
    </body>
</html>

<?php
    $var1 = $_POST["num1"];


    if ($var1 != null) {

    
        if ($var1 >= 30) {
            echo "<h1 class='resposta'>Hoje está muito: " . "<span style='color: orange'>QUENTE!!!</span></h1>";
        } 
        elseif ($var1 <= 20) {
            echo "<h1 class='resposta'>Hoje está muito: " . "<span style='color: dodgerblue'>FRIO!!!</span></h1>";
        }

        else {
            echo "<h1 class='resposta'><span style='color: dodgerblue'>A temperatura de hoje está agradavel!</span></h1>";
        }
    }
?>

<html>
    <body>
        <div class="credits">Developed by Rodrigo L. Cassilhas</div>
    </body>
</html>