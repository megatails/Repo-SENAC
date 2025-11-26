<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Exercicio 7</title>
</head>
    <header>
        <h1>Exercicio 7</h1>
    </header>
    <body>
        <form action="" method="POST">
            <label for="num">Quantos <span style="color: crimson;">Litros</span> gostaria de injetar? </label>
            <input type="number" step="0.01" name="num" id="num"  required><br>

            <label for="fuel">Escolha o seu combustivel:</label>
            <select name="fuel" id="fuel" required>
                <option value="">Selecione...</option>
                <option value="A-álcool">Alcool</option>
                <option value="G-gasolina">Gasolina</option>
            </select>


            <input class="arco-iris" type="submit" value="Qual o valor?">
        </form>
    </body>
</html>

<?php
    $var1 = $_POST["num"];
    $var2 = (string)$_POST["fuel"];

    $alc = 4.09;
    $gas = 5.29;

    if ($var2 == "A-álcool") {
        if ($var1 <= 20) {
        echo "<h1 class='resposta'>O valor a ser pago é: <span style:'color: dodgerblue'>" . $var1 * ($alc - ($alc * 0.03)) . "</span> Reais</h1>";
        }
    else if ($var1 > 20) {
        echo "<h1 class='resposta'>O valor a ser pago é: <span style:'color: dodgerblue'> " . $var1 * ($alc - ($alc * 0.05)) . "</span> Reais</h1>"; 
        }
    }
    else if ($var2 == "G-gasolina") {
        if ($var1 <= 20) {
        echo "<h1 class='resposta'>O valor a ser pago é: <span style:'color: dodgerblue'> " . $var1 * ($gas - ($gas * 0.04)) . "</span> Reais</h1>";
        }
        else if ($var1 > 20) {
        echo "<h1 class='resposta'>O valor a ser pago é: <span style:'color: dodgerblue'> " . $var1 * ($gas - ($gas * 0.06)) . "</span> Reais</h1>"; 
    }
}
?>

<html>
    <body>
        <div class="credits">Developed by Rodrigo L. Cassilhas</div>
    </body>
</html>