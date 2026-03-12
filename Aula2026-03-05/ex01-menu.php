<?php
    session_start();
    $opcao = $_SESSION['opcao'] ?? 0;

    $nome  = $_SESSION['nome']  ?? [];
    $idade = $_SESSION['idade'] ?? [];
    $curso = $_SESSION['curso'] ?? [];
    $notaF = $_SESSION['notaF'] ?? [];
    
    $i = count($nome); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro de Alunos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="op-cadastrar.php">Cadastrar Alunos</a>
    <a href="op-listar.php">Listar Alunos</a>
    <a href="op-buscar.php">Buscar aluno pelo nome</a>
    <a href="op-calcular.php">Calcular média da turma</a>
    <a href="index.php">Sair</a>
    
    <?php if ($opcao === 1) { ?>
        <form action="" method="post">
            <div class="grid">
                <div>
                    <h4>Dados do Aluno Nº <?= $i + 1 ?></h4>

                    <label for="nome<?= $i ?>">Digite o nome do aluno</label>
                    <input type="text" name="nome<?= $i ?>" id="nome<?= $i ?>"
                           required value="<?= htmlspecialchars($nome[$i] ?? '') ?>">

                    <label for="idade<?= $i ?>">Digite idade do aluno</label>
                    <input type="number" name="idade<?= $i ?>" id="idade<?= $i ?>"
                           required>

                    <label for="curso<?= $i ?>">Digite o curso do aluno</label>
                    <input type="text" name="curso<?= $i ?>" id="curso<?= $i ?>"
                           required>

                    <label for="notaF<?= $i ?>">Digite a nota final do aluno</label>
                    <input min="0" max="10" step="0.01" type="number"
                           name="notaF<?= $i ?>" id="notaF<?= $i ?>" required>

                    <button>Cadastrar</button>
                </div>
            </div>
        </form>


    <?php } elseif ($opcao === 2) { ?>
        <form action="" method="post">
            <div class="grid"></div>
                <div>
                    <h4>Listar Alunos<?php echo $i+1 ?></h4>
                </div>
            </div>
        </form>


    <?php } elseif ($opcao === 3) { ?>
        <form action="" method="post">
            <div class="grid"></div>
                <div>
                    <h4>Buscar aluno pelo nome<?php echo $i+1 ?></h4>
                </div>
            </div>
        </form>


    <?php } else { ?>
        <form action="" method="post">
            <div class="grid"></div>
                <div>
                    <h4>Calcular média da turma<?php echo $i+1 ?></h4>
                </div>
            </div>
        </form>
    <?php } ?>

    
</body>
</html>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        array_push($nome,  $_POST['nome'.$i]);
        array_push($idade, $_POST['idade'.$i]);
        array_push($curso, $_POST['curso'.$i]);
        array_push($notaF, $_POST['notaF'.$i]);

        $_SESSION['nome']  = $nome;
        $_SESSION['idade'] = $idade;
        $_SESSION['curso'] = $curso;
        $_SESSION['notaF'] = $notaF;

        echo "Aluno Nº $i cadastrado com <strong>sucesso!</strong>";

        echo '<br>';

        echo $nome[1];
        echo $idade[1];
        echo $curso[1];
        echo $notaF[1];
    }