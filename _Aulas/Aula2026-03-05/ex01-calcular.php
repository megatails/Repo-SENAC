<?php 
    session_start();
    $notaF = $_SESSION['notaF'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calcular Média</title>
</head>
    <body>
        <div class="lateral">
            <a class='msg' href='ex01-cadastrar.php'>Cadastrar Alunos</a>
            <a class='msg' href='ex01-listar.php'>Listar Alunos</a>
            <a class='msg' href='ex01-buscar.php'>Buscar aluno pelo nome</a>
            <a class='msg' href='ex01-calcular.php'>Calcular média da turma</a>
        </div>

        <div class="conteudo">
            <div class="form-container media-card">
            <h2>Média das notas da Turma</h2>
                <?php if(count($notaF) > 0) { ?>
                    <div class="resultado">
                    <?php echo array_sum($notaF) / count($notaF); ?>
                </div>

                <?php } else { ?>
                <div class="resultado-vazio">Nenhuma nota cadastrada</div>

                <?php } ?>
            </div>
        </div>
    </body>
    <br><br><br><a class='menu' href='index.php'>Sair</a>
</html>