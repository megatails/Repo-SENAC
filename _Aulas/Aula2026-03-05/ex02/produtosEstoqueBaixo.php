<?php
    session_start();
    $temEstoqueBaixo = false;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos c/ Estoque Baixo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
       <h1>Produtos c/ Estoque Baixo</h1>
        <?php
            for ($i = 0; $i < 10; $i++) { 
                if(isset($_SESSION['estoques'][$i], $_SESSION['nomes'][$i]) &&
                $_SESSION['estoques'][$i] < 5 &&
                !empty($_SESSION['nomes'][$i]) && !empty($_SESSION['estoques'][$i]))
                {
                    echo "<p>" . $_SESSION['nomes'][$i] . " - Estoque: " . $_SESSION['estoques'][$i] . "</p>";
                    $temEstoqueBaixo = true;
                }
            }

            if(!$temEstoqueBaixo)
            {
                echo "<p>Não existem produtos com estoque baixo.</p>";
            }
        ?>
    </div>
    <a href="index.php"><button type="button">Voltar</button></a>
</body>
</html>