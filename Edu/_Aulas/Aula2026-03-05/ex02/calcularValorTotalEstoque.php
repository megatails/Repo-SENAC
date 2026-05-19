<?php
    session_start();
    $totalValorEstoque = 0;

    for ($i = 0; $i < 10; $i++) { 
        if(isset($_SESSION['estoques'][$i], $_SESSION['precos'][$i]))
        {
            $totalValorEstoque += $_SESSION['estoques'][$i] * $_SESSION['precos'][$i];
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Valor Total Estoque</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Calcular Valor Total Estoque</h1>
        <p>O valor total em estoque é: R$ <?php echo $totalValorEstoque; ?></p>
    </div>
        <a href="index.php"><button type="button">Voltar</button></a>
</body>
</html>