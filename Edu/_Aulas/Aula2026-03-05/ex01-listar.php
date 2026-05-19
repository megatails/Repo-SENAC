<?php 
    session_start();
    $nome = $_SESSION['nome'];
    $idade = $_SESSION['idade'];
    $curso = $_SESSION['curso'];
    $notaF = $_SESSION['notaF'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Listagem de Alunos</title>
</head>
    <body>
        <div class="lateral">
            <a class='msg' href='ex01-cadastrar.php'>Cadastrar Alunos</a>
            <a class='msg' href='ex01-listar.php'>Listar Alunos</a>
            <a class='msg' href='ex01-buscar.php'>Buscar aluno pelo nome</a>
            <a class='msg' href='ex01-calcular.php'>Calcular média da turma</a>
        </div>

        <div class="conteudo">
            <h2>Lista de Alunos Cadastrados</h2>
            <table class="form-container">
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Curso</th>
                    <th>Nota Final</th>
                </tr>
                <?php for ($i = 0; $i < count($nome); $i++) { ?>
                <tr>
                    <td><?= htmlspecialchars($nome[$i]) ?></td>
                    <td><?= htmlspecialchars($idade[$i]) ?></td>
                    <td><?= htmlspecialchars($curso[$i]) ?></td>
                    <td><?= htmlspecialchars($notaF[$i]) ?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </body>
    <br><br><br><a class='menu' href='index.php'>Sair</a>
</html>