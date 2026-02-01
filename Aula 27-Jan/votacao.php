<?php
    $turmas = file("turmas.txt");
    $alunos = file("alunos.txt");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Votação!!</title>
</head>
<body>
    <div class="container">
        <?php if(!isset($_POST['turmaAluno']) && empty($_POST['turmaAluno'])) { ?>
        <form id="formVotacao" action="votacao.php" method="post">
            <label for="formVotacao">Escolha a turma</label>
            <select name="turmaAluno" id="turmaAluno">
            <option value="">Selecione...</option>
            <?php foreach ($turmas as $turma): ?>
                <option value="<?= $turma ?>"><?= $turma ?></option>
            <?php endforeach; ?>
            </select>

            <button type="submit" value="turmaAluno">Confirmar Seleção</button> <br><br><?php } ?>
            
            <?php if(isset($_POST['turmaAluno']) && !empty($_POST['turmaAluno'])) { ?>
            <label for="aluno">Escolha seu voto para Representante</label>
            <select name="aluno" id="aluno">
            <option value="">Selecione...</option>
            <?php
                foreach ($alunos as $aluno): 
                    $alunoPntr = explode(' | ', $aluno);

                    if($alunoPntr[2] == $turmaSelect){ ?>
                    
                    <option value="<?= $alunoPntr[0] ?>"> <?= $alunoPntr[0] ?> </option>
            <?php } endforeach; ?>
            </select>
            <button type="submit" value="aluno">Confirmar Voto</button> <?php } ?>

        </form>
    </div>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $nomeAluno = str_contains($alunos, $turma)

    $turmaSelect = $_POST['turmaAluno'];
    echo "Turma selecionada: " . $turmaSelect;
    echo $alunoPntr[0];
}
?>

<!-- fazer com que haja uma comparação da string no turmas com alunos, 
para que ele procura na linha para achar a string correspondente ao turmas
exemplo: em turmas.txt tem a turma 'ads1' em alunos.txt, na quarta linha, 
tem o aluno Walter, e na terceira coluna 'ads1', o codigo deve procurar pela string 'ads1' 
e pegar somente o nome do aluno na linha. -->