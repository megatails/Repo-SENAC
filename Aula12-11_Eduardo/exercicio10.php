<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Exercicio 10</title>
</head>
    <header>
        <h1>Exercicio 10</h1>
    </header>
    <body>
        <form action="" method="POST">
            <label for="num1">Insira o valor do seu <span style="color: dodgerblue;">Salário: </span></label>
            <input type="number" name="num1" id="num1" required>

            <label for="num2">Insira o valor do <span style="color: dodgerblue;">Produto </span> que irá comprar:</label>
            <input type="number" name="num2" id="num2" required>


            <input class="arco-iris" type="submit" value="Comprar">
        </form>
    </body>
</html>

<?php
    $var1 = $_POST["num1"];
    $varprct = $var1*0.40;
    $var2 = $_POST["num2"];

    if ($var1 != null && $var2 != null) 
    {

        if ($var2 >= $varprct) 
        {
            echo "<h1 class='resposta' style='color: crimson;'>Compra não aprovada <br> credito insuficiente</h1>";
        }
        else 
        {
            echo "<h1 class='resposta' style='color: dodgerblue;'>Compra Aprovada!</h1>";
        }

    }


?>

<html>
    <body>
        <div class="credits">Developed by Rodrigo L. Cassilhas</div>
    </body>
</html>