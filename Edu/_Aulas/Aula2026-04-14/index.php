<?php
    session_start();

    if (isset($_SESSION['nome']) && is_array($_SESSION['nome'])) {
    $matricula = $_SESSION['matricula'];
    $nome = $_SESSION['nome'];
    $nota1 = $_SESSION['nota1'];
    $nota2 = $_SESSION['nota2'];
    $faltas = $_SESSION['faltas'];
    $notafinal = $_SESSION['notafinal'];
    $status = $_SESSION['status'];
    } else {
        $matricula = [];
        $nome = [];
        $nota1 = [];
        $nota2 = [];
        $faltas = [];
        $notafinal = [];
        $status = [];
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
        <?php 
            include('menu.php');
        ?>
        <div class="conteudo">
            <h2>Bem-vindo ao Sistema de Cadastro de Alunos</h2>
            <p>Escolha uma opção no menu para começar.</p>
        </div>
        
    </body>
</html>