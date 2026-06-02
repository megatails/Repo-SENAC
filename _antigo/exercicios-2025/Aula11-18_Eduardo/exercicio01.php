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
            <label for="sex">Qual seu sexo?</label>
            <select name="sex" id="sex" required>
                <option value="">Selecione...</option>
                <option value="masc">Masculino</option>
                <option value="fem">Feminino</option>
            </select>

            <label for="num">Insira a sua <span style="color: crimson;">Altura</span>: </label>
            <input type="number" step="0.01" name="num" id="num"  required><br>


            <input class="arco-iris" type="submit" value="Qual o maior?">
        </form>
    </body>
</html>

<?php
    $var1 = (string)$_POST["sex"];
    $var2 = $_POST["num"];



    if ($var1 == "masc") {
        echo "<h1 class='resposta'>O seu peso <span style:'color: dodgerblue'> Ideal</span> é: " . (72.7 * $var2) - 58 . " kg</h1>"; 
    }
    else if ($var1 == "fem") {
        echo "<h1 class='resposta'>O seu peso <span style:'color: hotpink'> Ideal</span> é: " . (62.1 * $var2) - 44.7 . " kg</h1>"; 
    }
?>

<html>
    <body>
        <div class="credits">Developed by Rodrigo L. Cassilhas</div>
    </body>
</html>