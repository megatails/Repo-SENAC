<?php
    $turmas = file("turmas.txt");
    $alunosArray = file("alunos.txt");
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
                <a class="botao-lista principal" href="menu.php"><<<< Voltar para o Menu</a>
            </form><?php
        } ?>
            
        <!-- Formulário para selecionar o ALUNO --><?php 
        if(!empty($_POST['turmaAluno'])) { ?>
            <form action="resultados.php" method="post">
                <label for="aluno">Escolha seu voto para Representante</label>
                <select name="aluno" id="aluno" required>
                    <option value="">Selecione...</option><?php 
                    
                    foreach ($alunosArray as $alunoLinha): 
                        $alunoDados = explode(' | ', $alunoLinha);
                        $turmaSelect = $_POST['turmaAluno'];

                        if(trim($alunoDados[2]) == trim($turmaSelect)): ?>
                            <option value="<?= $alunoDados[1] ?>"> <?= $alunoDados[0] ?> </option><?php
                        endif; ?><?php                         
                    endforeach; ?>
                </select>
                <button type="submit" value="aluno">Confirmar Voto</button>
                <a class="botao-lista principal" href="votacao.php"><<<< Trocar Turma</a>
            </form><?php 
        } ?>

    </div>
</body>
</html>