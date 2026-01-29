<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Votação</title>
</head>

<body>
    <div class="container">

        <h1>🗳️ Bem-vindo à votação!</h1>

        <a class="botao-lista principal" href="votacao.php">
            Entrar na Votação
        </a>

        <div class="professor">
            <h3>Área do Professor</h3>

            <a class="botao-lista" href="cadastroAlunos.php">
                Cadastrar Alunos
            </a>

            <a class="botao-lista" href="cadastroTurmas.php">
                Cadastrar Turmas
            </a>
        </div>

    </div>
</body>
</html>

<?php 
    $chkEmail = $_POST['chkEmail'];

    if (str_contains($chkEmail, '@docente.br'))  {
        echo 'Bem vindo professor, aqui você pode cadastrar suas turmas para a votação:';

        
    } else {
        echo 'Você não tem permissão para fazer isso.';
    }

?>
