<?php 
    require "../DB/conexao.php";

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nome = trim($_POST['nome']);
        $email = trim($_POST['email']);
        $senha = password_hash($_POST['senha'],PASSWORD_DEFAULT);
        $tipo = $_POST['tipo'];
        try{
            $sql = "INSERT INTO usuarios (nome, email, senha, tipo)
            VALUES(:nome, :email, :senha, :tipo)";
            $smtp = $pdo->prepare($sql);
            $smtp->execute([
                ':nome'=>$nome,
                ':email'=>$email,
                ':senha'=>$senha,
                ':tipo'=>$tipo,
            ]);
            header("Location: ../DB/painel.php");
            exit;
        }
        catch(PDOException $e){
            $mensagem="<p class='erro'>Erro ao cadastrar> ".$e->getMessage()."</p>";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Cadastrar Usuario</title>
</head>
<body>
    <?php 
        include('../menu.php');
    ?>
    <style>
        body 
        {
            position: relative;
            right:150px;
        }
    </style>
    
    <div class="conteudo">
        <form method="POST">
            <label for="nome">Digite o nome:</label>
            <input type="text" name="nome" id="nome" size="20">
            <label for="email">Digite o email:</label>
            <input type="email" name="email" id="email" size="20">
            <label for="senha">Digite a senha:</label>
            <input type="password" name="senha" id="senha" size="20">
            <label for="tipo">Escolha o tipo de usuario:</label>
            <select name="tipo" id="tipo" >
                <option >Selecione...</option>
                <option value="1">Aluno</option>
                <option value="2">Admin</option>
            </select>
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>