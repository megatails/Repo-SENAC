<?php
    require '../DB/conexao.php';

    if($_SERVER['REQUEST_METHOD']==='POST'){
        $titulo = trim($_POST['titulo']);
        $autor = trim($_POST['autor']);
        $disponivel = isset($_POST['disponivel'])? 1 : 0;
        $imagem  = null;
        if(isset($_FILES['imagem']) && $_FILES['imagem']['error'] === 0){
            if(!is_dir('../Imagens')){
                mkdir('../Imagens',0777, true);
            }
            $extensao = pathinfo($_FILES['imagem']['name'],PATHINFO_EXTENSION);
            $nomeArquivo = uniqid().".".$extensao;
            $caminho = "../Imagens/".$nomeArquivo;
            if(move_uploaded_file($_FILES['imagem']['tmp_name'],$caminho)){
                $imagem = $nomeArquivo;
    
            }else{
                echo "<script>alert('Erro ao salvar a imagem!')<script>";
            }
            try{
                $sql = "INSERT INTO livros (titulo, autor, disponivel, imagem)
                VALUES (:titulo,:autor,:disponivel,:imagem)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    ':titulo'=>$titulo,
                    ':autor'=>$autor,
                    ':disponivel'=>$disponivel,
                    ':imagem'=>$imagem
                ]);
                echo "<script> alert('Livro cadastrado com sucesso!');
                window.location.href = '../painel.php';</script>";
                exit;
            } catch(PDOException $e){
                echo"<script>alert('Erro: ".$e->getMessage()."');</script>";
            }
        
        }
    }
    
 
?>
 
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Cadastrar Livro</title>
</head>
<body>
    <?php 
        include('../menu.php');
    ?>
    <div class="conteudo">
        <h1>Cadastrar Livro</h1>

        <?= $mensagem ?? '' ?>
    
        <form method="POST" enctype="multipart/form-data">
            <input type="text" name="titulo" id="titulo" size="20" placeholder="Título" required>
            <input type="text" name="autor" id="autor" placeholder="Autor" required>
    
            <div class="checkbox-group">
                <input type="checkbox" name="disponivel" id="disponivel" checked>
                <label for="disponivel">Disponível</label>
            </div>
    
            <input type="file" name="imagem" accept="image/*">
    
            <button type="submit">Cadastrar</button>
        </form>
    </div>
 
</body>
</html>