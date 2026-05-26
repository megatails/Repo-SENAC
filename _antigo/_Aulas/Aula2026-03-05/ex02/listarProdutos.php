<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post">
        <label for="nomeBusca">Nome:</label>
        <input type="text" name="nomeBusca">
        <button>Buscar</button>
        <a href="index.php"><button type="button">Voltar</button></a>
    </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();
    echo "<div id='container'>";
    if(!empty($_SESSION['nomes']))
    {
        $nomeBusca = $_POST['nomeBusca'];
        $indexProdutos = "";
        $indexProdutosArray = [];
        
        if(!empty($nomeBusca))
        {
            for ($i=0; $i < 10; $i++) { 
                if(str_contains($_SESSION['nomes'][$i],$nomeBusca))                
                    $indexProdutos .= "{$i},";                
            }

            if($indexProdutos == "")
            {
                echo "Produto Não Encontrado.";
                echo "</div>";
                exit();
            }
            
            $indexProdutosArray = explode(',', $indexProdutos);
        }
        else {
            $indexProdutosArray = range(0, 9);
        }


        echo "<table border='1'><tr>";
        echo "<th>Nome</th>";
        echo "<th>Categoria</th>";
        echo "<th>Estoque</th>";
        echo "<th>Preço</th></tr>";
        for ($i=0; $i < count($indexProdutosArray); $i++) { 
            if(!empty($_SESSION['nomes'][$indexProdutosArray[$i]]))
            {    
                echo "<tr><td>" . $_SESSION['nomes'][$indexProdutosArray[$i]] . "</td>";
                echo "<td>" . $_SESSION['categorias'][$indexProdutosArray[$i]] . "</td>";
                echo "<td>" . $_SESSION['estoques'][$indexProdutosArray[$i]] . "</td>";
                echo "<td>" . $_SESSION['precos'][$indexProdutosArray[$i]] . "</td></tr>";
            }
        } 
        echo "</table>";
    }
    else {
        echo "Produtos Não Cadastrados.";
    }
    echo "</div>";
}
?>