<?php 
    require '../DB/conexao.php';
    if($_SERVER['REQUEST_METHOD']==='POST')
        {
            $titulo = trim($_POST['titulo']);
            $autor = trim($_POST['autor']);
            $disponivel = isset($_POST['disponivel'])? 1 : 0;
            $imagem = null;

            if(isset($_FILES['imagem']) && $_FILES['imagem']['error'] === 0) {
                if(!is_dir('../Imagens')) 
                {
                    mkdir('../Imagens', 0777, true);

                }
                $extensao = pathinfo($_FILES['imagem']['name'],PATHINFO_EXTENSION);
                $nomeArquivo = uniqid().".".$extensao;
                $caminho = "../Imagens".$nomeArquivo;
                if(move_uploaded_file($_FILES['imagem']['tmp_name'],$caminho))
                {
                    $imagem = $nomeArquivo;

                }else
                {
                    echo "<script>alert('Erro ao salvar a imagem')</script>";
                }

                try
                {
                    $sql = "INSERT INTO livros (titulo, autor, disponivel, imagem)
                    VALUES (:titulo, :autor, :disponivel, :imagem)";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute([
                        ':titulo'=>$titulo,
                        ':autor'=>$autor,
                        ':disponivel'=>$disponivel,
                        ':imagem'=>$imagem
                    ]);
                    echo "<script>alert ('Livro cadastrado com sucesso!'); window.location.href = '../index.php'</script>";
                    exit();
                } 
                catch(PDOException $e)
                {
                    echo "<script>alert('Erro: ".$e->getMessage()."')</script>";
                }
            } 
        }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Cadastrar Livro</title>
</head>
<body>
        <?php 
            include('../menu.php');
        ?>
    <div class="conteudo">
        <div class="card">
            <h2>Cadastro de Novo Livro</h2>
            <p>Adicione uma nova obra ao acervo digital da biblioteca. Preencha informações 
                abaixo e envia acapa e o arquiv odigital do livro em formato .pdf.</p>
            <br>            
        </div>

        <div class="">
            <form action="salvar_livro.php" method="post">
                <label for="">Título do Livro: </label> 
                <input type="text" name="titulo" required>

                <label for="">Autor: </label>
                <input type="text" name="autor" required>

                <label for="">Ano de Publicação: </label>
                <input type="number" name="ano" required>

                <label for="categoria">Categoria: </label>
                <select name="categoria" required>
                    <option value="">Selecione...</option>
                    <option value="Romance">Romance</option>
                    <option value="BL">RPG</option>
                    <option value="Fantasia">Fantasia</option>
                    <option value="fic">Ficção Científica</option>
                    <option value="tech">Tecnologia</option>
                    <option value="Bio">Biografia</option>
                    <option value="infantil">Infantil</option>
                </select>
                <br><br>
                <label > Capa do livro (imagem)</label>
                <input type="file" name="capa" accept="image/*" required>

                <label for="">Capa do Livro (imagem)</label>
                <input type="file" name="arquivo" accept="application/pdf" required>

                <button class=""> Cadastrar </button>
            </form>
        </div>
    </div>
</body>
</html>