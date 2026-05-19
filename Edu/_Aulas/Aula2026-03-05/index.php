<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Portal</title>
</head>

<header>
  <div class="backdrop"></div>
  <div class="backdrop-edge"></div>
</header>

<body>
    <div class="media-card">
        <div class='form-container'>
            <h2>Sistema de Cadastro de Alunos</h2>
            <form action="ex01-menu.php" method="post">
            <input class="botao" type="submit" value="Entrar">
            </form>
        </div>
        <div class='form-container'>
            <h2>Sistema de Controle de Produtos</h2>

            <form action="ex02/index.php" method="post">
            <input class="botao" type="submit" value="Entrar">
            </form>
        </div>
    </div>
</body>
</html>
