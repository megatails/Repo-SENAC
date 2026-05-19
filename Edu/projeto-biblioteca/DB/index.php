<?php 
    require 'conexao.php';
    session_start();
    $mensagem ="";
    
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $email = trim($_POST['email']);
        $senha = trim($_POST['senha']);

        $sql ="SELECT * FROM usuarios WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':email' => $email]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if($usuario && $senha==$usuario['senha']){
            $SESSION['usuario'] = $usuario['nome'];
            $_SESSION['tipo'] = $usuario['tipo'];
            header("Location:painel.php");
            exit;
        }
        else {
            $mensagem="<p class='erro'>Email ou senha Inválidos!</p>";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <style>html {color-scheme: dark;}</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Biblioteca</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <?php echo $mensagem;?>
        <form method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>