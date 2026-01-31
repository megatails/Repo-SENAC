<?php
    $turmas = file("turmas.txt");
    $alunos = file("alunos.txt");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votação!!</title>
</head>
<body>
    <div class="container">
        <form action="resultados.php" method="post">
            <select name="turmaAluno" id="turmaAluno">
            <option value="">Selecione...</option>
            <?php foreach ($turmas as $turma): ?>
                <option value="<?= $turma ?>"><?= $turma ?></option>
            <?php endforeach; ?>
            </select>

            <select name="aluno" id="aluno">
            <option value="">Selecione...</option>
            <?php
                foreach ($alunos as $aluno): 
                    $teste = explode(' | ', $aluno);

                    if($teste[2] == $turma){
                    ?>
                    <option value="<?= $teste[2] ?>"><?= $teste[2] ?></option>
            <?php } endforeach; ?>
            </select>
        </form>
    </div>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $nomeAluno = str_contains($alunos, $turma)
}
?>

<!-- fazer com que haja uma comparação da string no turmas com alunos, 
para que ele procura na linha para achar a string correspondente ao turmas
exemplo: em turmas.txt tem a turma 'ads1' em alunos.txt, na quarta linha, 
tem o aluno Walter, e na terceira coluna 'ads1', o codigo deve procurar pela string 'ads1' 
e pegar somente o nome do aluno na linha. -->