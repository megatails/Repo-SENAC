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
        <label for="">Número 1:</label>
        <input type="number" name="num1" required><br><br> 

        <label for="">Número 2:</label>
        <input type="number" name="num2" required><br><br> 
        
        <input type="submit" value="Mostrar">
    </form>
    
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $var1 = $_POST["num1"];
    $var2 = $_POST["num2"];

    // print($var1 . $var2);
    echo "Valor A" . $var1 ."<br>" .  "Valor B" . $var2;
    }
?>

</body>
</html>

