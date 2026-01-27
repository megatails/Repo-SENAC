<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Exercicio 5</title>
</head>
    <header>
        <h1>Exercicio 5</h1>
    </header>
    <body>
        <form action="" method="POST">
            <label for="num1">Insira o <span style="color: dodgerblue;"> número: </span></label>
            <input type="number" name="num1" id="num1" required>

            <input class="arco-iris" type="submit" value="é multiplo de 3 e 5?">
        </form>
    </body>
</html>

<?php
    $var1 = $_POST["num1"];


    if ($var1 != null) {

    
        if ($var1 % 3 == 0 && $var1 % 5 == 0) {
            echo "<h1 class='resposta'>". "O número " . "<span style='color: dodgerblue'>$var1</span>" . " é multiplo de " . "<span style='color: crimson'>> 3" . "</span> e " . "<span style='color: crimson'>5 <</span></h1>";
        } else {
            echo "<h1 class='resposta'>". "O número " . "<span style='color: dodgerblue'>$var1 </span>" . "<span style='color: crimson'>> não <</span> é multiplo de 3 e 5 ! </h1>";
        }
    }
?>

<html>
    <body>
        <div class="credits">Developed by Rodrigo L. Cassilhas</div>
    </body>
</html>