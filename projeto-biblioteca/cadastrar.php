<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastrar Livro</title>
</head>
<body>
    <?php 
            include('menu.php');
    ?>
    <div class="conteudo">
        <div class="card">
            <h2>Cadastro de Novo Livro</h2>
            <p>Adicione uma nova obra ao acervo digital da biblioteca. Preencha informações 
                abaixo e envia acapa e o arquiv odigital do livro em formato .pdf.</p>
            <br>            
        </div>

        <div class="">
            <form action="" method="post">
                <label for="">Título do Livro: </label> 
                <input type="text" name="titulo" id="titulo" required>

                <label for="">Autor: </label>
                <input type="text" name="autor" id="autor" required>

                <label for="">Ano de Publicação: </label>
                <input type="number" value="ano" id="ano" required>

                <label for="categoria">Categoria: </label>
                <select name="categoria" id="categoria" required>
                    <option value="">Selecione...</option>
                    <option value="Romance">Romance</option>
                    <option value="BL">Boy love</option>
                    <option value="Fantasia">Fantasia</option>
                    <option value="fic">Ficção Científica</option>
                    <option value="tech">Tecnologia</option>
                    <option value="Bio">Biografia</option>
                    <option value="infantil">Infantil</option>
                </select>
                <br><br>
                <label for="">Capa do Livro (imagem)</label>
                <input type="file" name="arquivo" id="application/pdf" required>

                <button class=""> Cadastrar </button>
            </form>
        </div>
    </div>
</body>
</html>