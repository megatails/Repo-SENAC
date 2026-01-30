<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucesso</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="index.php">
        <h1>Cadastro realizado com sucesso!</h1>
        <button class="arco-iris" >Voltar</button>
    </form>
</body>
</html>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header("Location: index.php");
    exit();
}
?>