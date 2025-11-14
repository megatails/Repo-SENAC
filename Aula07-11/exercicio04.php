<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04</title>
    <link rel="stylesheet" href="style 4.css">
</head>
<body>
     <h1>Exercicio 04</h1>
    <form action="" method="post">
        <label for="">Número 1:</label>
        <input type="number" name="num1" required><br><br> 

        <label for="">Número 2:</label>
        <input type="number" name="num2" required><br><br> 

        <label for="">Número 3:</label>
        <input type="number" name="num3" required><br><br> 

        <input type="submit" value="Mostrar">
    </form>
    
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $A = $_POST["num1"]; //A
    $B = $_POST["num2"]; //B
    $C = $_POST["num3"]; //C

    if ($B < $A && $B < $C) {
        echo"B é o menor";
    }
        
    elseif ($A < $B && $A < $C) {
        echo "A é o menor";
    }

    else {
        echo "C é o menor";
    }
}
?>
</body>
</html>