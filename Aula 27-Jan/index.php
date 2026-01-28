<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Boas vindas a votação!<br>

    <label for="votacao"></label>
    <h2><a class="botao-lista" href="votacao.php">Entrar na Votação!</a></h2>

    <h3 style="color: crimson;">Area do Professor</h3>
    <label for="cadastroA"></label>
    <a class="botao-lista" id="cadastroA" href="cadastroAlunos.php">Cadastrar Alunos</a><br>
    
    <label for="cadastroT"></label>
    <a class="botao-lista" id="cadastroT" href="cadastroTurmas.php">Cadastrar Turmas</a>
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