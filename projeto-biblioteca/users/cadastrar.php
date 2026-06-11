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
    <div class="conteudo">
        <h1>Cadastrar Usuário</h1>

        <?= $mensagem ?? '' ?>

        <form method="POST">
            <input type="text" name="nome" id="nome" size="54" placeholder="Nome" required><br>
            <input type="email" name="email" id="email" placeholder="Email" required><br><br>
            <input type="password" name="senha" id="senha" placeholder="Senha" required><br><br>

            <select name="tipo" id="tipo" >
                <option >Selecione o tipo de usuário...</option>
                <option value="1">Aluno</option>
                <option value="2">Admin</option>
            </select>

            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>