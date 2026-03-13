<?php
    session_start();
    $opcao = 0;
    $_SESSION['opcao'] = $opcao;

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
    <div class='multi'>
        <h2>Sistema de Cadastro de Alunos</h2>
        <form action="ex01-menu.php" method="post">
        <input class="botao" type="submit" value="Entrar">
        </form>

        </form>
    </div>
    <div class='multi'>
        <h2>Sistema de Controle de Produtos</h2>

        <form action="exercicio02.php" method="post">
        <input class="botao" type="submit" value="Entrar">
        </form>
    </div>
</body>
</html>
