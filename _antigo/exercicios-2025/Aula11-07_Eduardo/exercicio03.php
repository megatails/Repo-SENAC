<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
    <link rel="stylesheet" href="style 4.css">
</head>
<body>
     <h1>Exercicio 03</h1>
    <form action="" method="post">
        <label for="">Valor do Produto 1:</label>
        <input type="number" name="num1" required><br><br> 


        <input type="submit" value="Mostrar">
    </form>
    
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $var1 = $_POST["num1"];
    $var2 = $_POST["num2"];

    echo "Valor Original: " . $var1 ."<br>" . "Valor com Acrescimo: " . $var1*1.20;
    }
?>
</body>
</html>