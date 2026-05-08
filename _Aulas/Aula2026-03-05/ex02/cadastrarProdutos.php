<?php
$qntProdutos = 10;

session_start();
$_SESSION["nomes"] = [];
$_SESSION["categorias"] = [];
$_SESSION["estoques"] = [];
$_SESSION["precos"] = [];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>    
    <div id="container">
        <h1>Cadastro do <span>0</span>º Produto</h1>
        <form action="" method="post" id="form"><?php
            for($i = 0; $i < $qntProdutos; $i++) {?>
                <div id="dadosProduto_<?=$i?>" style="">
                    <label for="nmProduto">Nome:</label>
                    <input type="text" id="nmProduto_<?=$i?>" name="nmProduto_<?=$i?>" required>
                    
                    <label for="categoriaProduto">Categoria:</label>
                    <input type="text" id="categoriaProduto_<?=$i?>" name="categoriaProduto_<?=$i?>" required>
                    
                    <label for="estoqueProduto">Estoque:</label>
                    <input type="number" id="estoqueProduto_<?=$i?>" name="estoqueProduto_<?=$i?>" min="0" required>
                    
                    <label for="precoProduto">Preço:</label>
                    <input type="number" id="precoProduto_<?=$i?>" name="precoProduto_<?=$i?>" min="0" step="0.01" required>
                </div><?php            
            }?>
            <button id="botaoSubmit" type="submit">Cadastrar</button>
            <a href="index.php"><button type="button">Voltar</button></a>
        </form>
    </div>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    for ($i = 0; $i < $qntProdutos; $i++) { 
        array_push($_SESSION["nomes"], $_POST["nmProduto_$i"]);
        array_push($_SESSION["categorias"], $_POST["categoriaProduto_$i"]);
        array_push($_SESSION["estoques"], $_POST["estoqueProduto_$i"]);
        array_push($_SESSION["precos"], $_POST["precoProduto_$i"]);
    } 
    echo "<div id='container2'><h1>Produtos Cadastrados com Sucesso!</h1></div>";
}

?>

<script>
    var form = document.getElementById("form");
    function MostraCamposProdutoAtual()
    {        
        debugger;
        var container = document.getElementById("container");
        var produtoAtual = container.querySelector("span").innerHTML;

        for (let i = 0; i < 10; i++) {
            var camposProduto = document.getElementById(`dadosProduto_${i}`);
            if(produtoAtual != i)
                camposProduto.style.display = "none";
            else
                camposProduto.style.display = "inline-block";           
        }

        if((parseInt(produtoAtual)) == 10)
        {
            form.submit();
        }

        container.querySelector("span").innerHTML = produtoAtual == "10"
                                                    ? "10"
                                                    : parseInt(produtoAtual) + 1;
    }

    document.getElementById("botaoSubmit").addEventListener(
        "click",
        MostraCamposProdutoAtual
    );
    form.addEventListener("submit", e =>{e.preventDefault();})
    MostraCamposProdutoAtual();
</script>

