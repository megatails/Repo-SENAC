<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Exercicio 3</title>
</head>
    <header>
        <h1>Exercicio 3</h1>
    </header>
    <body>
        <form action="" method="POST">
            <label for="num1">Insira o valor do <span style="color: dodgerblue;">produto</span>: </label>
            <input type="number" name="num1" id="num1" required>


            <input class="arco-iris" type="submit" value="Qual o maior?">
        </form>
    </body>
</html>

<?php
    $var1 = $_POST["num1"];


    if ($var1 != null) {

    
        if ($var1 >= 100) {
            echo "<h1 class='resposta'>Você ganhou um desconto de: " . "<span class='arco-iris'>10 reais!!!</span> <br><br> Obrigado por comprar conosco!</h1>";
        } else {
            echo "<h1 class='resposta'><span style='color: crimson'>Obrigado por comprar conosco!</span></h1>";
        }
    }
?>

<html>
    <body>
        <div class="credits">Developed by Rodrigo L. Cassilhas</div>
    </body>
</html>