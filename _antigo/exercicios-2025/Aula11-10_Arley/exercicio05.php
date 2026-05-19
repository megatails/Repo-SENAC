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
        <label for="">Insira um número Real: </label>
        <input type="text" name="num1" required placeholder="0.0"><br><br>
        
        <input type="submit" value="Mostrar">
    </form>
    
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $var1 = $_POST["num1"];
    $var2 = $var1*1/3;


    echo "Resultado: " . $var2;
    }
?>
</body>
</html>