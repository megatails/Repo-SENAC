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
        <label for="">Digite seu Salario:</label>
        <input type="number" name="num1" required><br><br> 


        <input type="submit" value="Mostrar">
    </form>
    
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $var1 = $_POST["num1"];
    $var2 = $_POST["num2"];

    echo "Valor Original: " . "R$". $var1 ."<br>" . "Salario pós aumento: " . "R$".$var1*1.30;
    }
?>
</body>
</html>