<?php
    $turmas = file("turmas.txt");

    
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastrar Alunos</title>
</head>
<body>
    <form action="" method="post">
        <a class="botao-lista principal" href="index.php"><<<< Voltar</a>
        <label for="nomeAluno">Digite o seu nome: </label>
        <input id="nomeAluno" name="nomeAluno" type="text" required>

        <label for="raAluno">Digite o seu <span style="color='crimson'">RA</div>: </label>
        <input id="raAluno" name="raAluno" type="text" required>

        <label for="turmaAluno">Escolha a sua turma: </label>
        <select name="turmaAluno" id="turmaAluno">
            <option value="">Selecione...</option>
            <?php foreach ($turmas as $turma): ?>
                <option value="<?= $turma ?>"><?= $turma ?></option>
            <?php endforeach; ?>
        </select>

        <input type="submit">
    </form>
    
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeAluno = $_POST['nomeAluno'];
    $raAluno = $_POST['raAluno'];
    $turmaAluno = $_POST['turmaAluno'];

    if(file_exists("alunos.txt"))
    {
        $dados = file_get_contents("alunos.txt");

        if(str_contains($dados, $raAluno)) {
            $erro = "aluno já cadastrado";
            header("Location: cadastroAlunos.php");
            exit();
        }

    }

    file_put_contents("alunos.txt",($nomeAluno . " | " . $raAluno . " | " . $turmaAluno).PHP_EOL, FILE_APPEND);
    header("Location: completo.php");
    $erro = null;
    exit();
}

?>

<?php ?>