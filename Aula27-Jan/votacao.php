<?php
    $turmas = file("./Aula27-Jan/turmas.txt");
    $alunosArray = file("./Aula27-Jan/alunos.txt");
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
        <!-- Formulário para selecionar a TURMA --><?php
        if(empty($_POST['turmaAluno'])) { ?>
            <form id="formVotacao" action="votacao.php" method="post">
                <label for="formVotacao">Escolha a turma</label>
                <select name="turmaAluno" id="turmaAluno" required>
                    <option value="">Selecione...</option><?php
                    foreach ($turmas as $turma): ?>
                        <option value="<?= $turma ?>"><?= $turma ?></option><?php
                    endforeach; ?>
                </select>

                <button type="submit" value="turmaAluno">Confirmar Seleção</button> <br><br>
            </form><?php
        } ?>
            
        <!-- Formulário para selecionar o ALUNO --><?php 
        if(!empty($_POST['turmaAluno'])) { ?>
            <form action="">
                <label for="aluno">Escolha seu voto para Representante</label>
                <select name="aluno" id="aluno">
                    <option value="">Selecione...</option><?php 
                    
                    foreach ($alunosArray as $alunoLinha): 
                        $alunoDados = explode(' | ', $alunoLinha);
                        $turmaSelect = $_POST['turmaAluno'];

                        if(trim($alunoDados[2]) == $turmaSelect): ?>
                            <option value="<?= $alunoDados[0] ?>"> <?= $alunoDados[0] ?> </option><?php
                        endif; ?><?php                         
                    endforeach; ?>
                </select>
                <button type="submit" value="aluno">Confirmar Voto</button>
            </form><?php 
        } ?>

    </div>
</body>
</html>
<?php
    $turmaSelect = $_POST['turmaAluno'];
 foreach ($alunosArray as $alunoLinha): 
                        $alunoDados = explode(' | ', $alunoLinha);
                        echo $turmaSelect . " - " . $alunoDados[2];
 endforeach;
echo $turmaSelect . " - " . $alunoDados[2];
?>