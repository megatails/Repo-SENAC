<?php
    session_start();

    if (isset($_SESSION['nome']) && is_array($_SESSION['nome'])) {
    $nome = $_SESSION['nome'];
    $idade = $_SESSION['idade'];
    $curso = $_SESSION['curso'];
    $notaF = $_SESSION['notaF'];
    } else {
        $nome = [];
        $idade = [];
        $curso = [];
        $notaF = [];
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro de Alunos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Bem-vindo ao Sistema de Cadastro de Alunos</h2>
    <p>Escolha uma opção no menu para começar.</p>
    <div class="lateral">
        <a class='msg' href='ex01-cadastrar.php'>Cadastrar Alunos</a>
        <a class='msg' href='ex01-listar.php'>Listar Alunos</a>
        <a class='msg' href='ex01-buscar.php'>Buscar aluno pelo nome</a>
        <a class='msg' href='ex01-calcular.php'>Calcular média da turma</a>
    </div>
    
</body>
    <br><br><br><a class='menu' href='index.php'>Sair</a>
</html>