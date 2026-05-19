<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 05</title>
    <link rel="stylesheet" href="style 4.css">
</head>
<body>
     <h1>Exercicio 05</h1>
    <form action="" method="post">
        <label for="">Raio:</label>
        <input type="number" name="num1" required><br><br> 

        <label for="">Altura:</label>
        <input type="number" name="num2" required><br><br> 


        
        <input type="submit" value="Mostrar">
    </form>
    
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $var1 = $_POST["num1"];
    $altura = $_POST["num2"];
    
    $PI = 3.14;
    $raio = $var1 * $var1;

    $Volume = $PI*$raio*$altura;


    echo "Resultado: " . $Volume;
    }
?>
</body>
</html>