<?php
    session_start();
    $opcao = $_SESSION['opcao'] ?? 0;

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
    <a class='msg' href='op-cadastrar.php'>Cadastrar Alunos</a>
    <a class='msg' href='op-listar.php'>Listar Alunos</a>
    <a class='msg' href='op-buscar.php'>Buscar aluno pelo nome</a>
    <a class='msg' href='op-calcular.php'>Calcular média da turma</a>

    
</body>
    <br><br><br><a class='menu' href='index.php'>Sair</a>
    <button type="button" onclick="limparArray()">limpar array</button> 
</html>

<?php 
    function limparArray() {
        $_SESSION['nome'] = [];
        $_SESSION['idade'] = [];
        $_SESSION['curso'] = [];
        $_SESSION['notaF'] = [];
    }
?>

<?php 
    echo '<br>nome = ' . implode(', ', $nome);
    echo '<br>idade = ' . implode(', ', $idade);
    echo '<br>curso = ' . implode(', ', $curso);
    echo '<br>notaF =' . implode(', ', $notaF);
    
    $opcao = 0;
    $_SESSION['opcao'] = $opcao;
?>