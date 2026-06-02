<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
    <link rel="stylesheet" href="style 4.css">
</head>
<body>
     <h1>Exercicio 02</h1>
    <form action="" method="post">
        <label for="">Número 1:</label>
        <input type="number" name="num1" required><br><br> 

        <label for="">Número 2:</label>
        <input type="number" name="num2" required><br><br> 

        <label for="">Número 3:</label>
        <input type="number" name="num3" required><br><br> 

        <label for="">Número 4:</label>
        <input type="number" name="num4" required><br><br> 
        
        <input type="submit" value="Mostrar">
    </form>
    
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $var1 = $_POST["num1"];
    $var2 = $_POST["num2"];
    $var3 = $_POST["num3"];
    $var4 = $_POST["num4"];

    echo "Resultado: " . $var1+$var2+$var3+$var4;
    }
?>
</body>
</html>