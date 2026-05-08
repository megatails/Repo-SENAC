<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Controle de Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container menu">
        <form action="" method="post">

        <h1>Sistema de Controle de Produtos</h1>
        <a href="cadastrarProdutos.php" type="button">
            <button type="button">Cadastrar Produtos</button>
        </a>
        <a href="listarProdutos.php" type="button">
            <button type="button">Listar Produtos</button>
        </a>  
        <a href="produtosEstoqueBaixo.php" type="button">
            <button type="button">Mostrar Produtos c/ Estoque Baixo</button>
        </a>          
        <a href="calcularValorTotalEstoque.php" type="button">
            <button type="button">Calcular Valor Total Estoque</button>
        </a>
            <button type="submit">Sair</button>
        </form>
    </div>
</body>
</html>

<?php 
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        die("Programa Finalizado.");
    }
?>