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
        <label for="">Digite seu número:</label>
        <input type="number" name="num1" required><br><br> 
        
        <input type="submit" value="Mostrar">
    </form>
    
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $var1 = $_POST["num1"];
    $var2 = $var1+1;
    $var3 = $var1-1; }
?>

<html>
<div class="format"> 
    <?php 
        echo "O número Antecessor: " . "<span style='color: dodgerblue;' > $var3</span>" . " | " . "Seu número: " . "<span style='color: magenta;' > $var1</span>" . " | " . "O número Sucessor: ". "<span style='color: crimson;' > $var2</span>"; 
    ?>
</div>
</html> 

</body>
</html>