<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
    <link rel="stylesheet" href="style 4.css">
</head>
<body>
    <h1>Exercicio 01</h1>
    <form action="" method="post">
        <label style="color: dodgerblue;" for="">Digite o Primeiro Número:</label>
        <input type="number" name="num1" required><br><br> 

        <label style="color: crimson;" for="">Digite o Segundo Número:</label>
        <input type="number" name="num2" required><br><br> 
        
        <input type="submit" value="Mostrar">
    </form>
    
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $var1 = $_POST["num1"];
    $var2 = $_POST["num2"];
    
    $sum = $var1 + $var2;
    $sub = $var1 - $var2;
    $sub2 = $var2 - $var1;
    $div = $var1 / $var2;
    $div2 = $var2 / $var1;
    $mul = $var2 * $var1;


    // print($var1 . $var2);
    echo "Valor da Soma: " . "<span style='color: dodgerblue;' > $sum </span>" ."<br>" 
    . "Valor da Subtração A: " . "<span style='color: dodgerblue;' > $sub </span>" . "  /  " .  "Valor da Subtração B:     " . "<span style='color: crimson;'>$sub2</span>" ."<br>"
    . "Valor da Divisão A: " . "<span style='color: dodgerblue;' > $div</span>" . " / " .  "Valor da Divisão B: " . "<span style='color: crimson;'> $div2</span>" . "<br>"
    . "Valor da Multiplicação: " . "<span style='color: dodgerblue;' >$div</span>";
    }
?>

</body>
</html>

