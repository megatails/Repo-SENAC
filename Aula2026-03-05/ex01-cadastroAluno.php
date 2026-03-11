<?php 
    session_start();
    $nome = array_fill(0,10,"");
    $idade = array_fill(0,10,"");
    $curso = array_fill(0,10,"");
    $notaF = array_fill(0,10,"");
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Aluno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
            
            
                <label for="nota<?= $i ?>">Nota<?= $i+1?>(0 a 10)</label>
                <input
                type="number"
                id="nota<?= $i ?>"
                name="nota<?= $i ?>"
                value="<?=htmlspecialchars($notas[$i])?>"
                required>
            
    <form action="" method="post">
        <div class="grid"></div>
            <?php for($i = 0; $i < 10; $i++):?>
                <div>
                    <h4>Dados do Aluno Nº <?php echo $i+1 ?></h4>
                    <label for="nome">Digite o nome do aluno</label>
                    <input type="text" name="nome<?= $i ?>" id="nome<?= $i ?>" required>

                    <label for="idade">Digite idade do aluno</label>
                    <input type="number" name="idade<?= $i ?>" id="idade<?= $i ?>" required>

                    <label for="curso">Digite o curso do aluno</label>
                    <input type="text" name="curso<?= $i ?>" id="curso<?= $i ?>" required>

                    <label for="notaF">Digite a nota final do aluno</label>
                    <input min="0" max="10" step="0.01" type="number" name="notaF<?= $i ?>" id="notaF<?= $i ?>" required>

                    <button>Cadastrar</button>
                </div>
            <?php endfor;?>
        </div>
    </form>
</body>
</html>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        array_push($nome, $_POST['nome']);
        array_push($idade, $_POST['idade']);
        array_push($curso, $_POST['curso']);
        array_push($notaF, $_POST['notaF']);

        $_SESSION['nome']=$nome;
        $_SESSION['idade']=$idade;
        $_SESSION['curso']=$curso;
        $_SESSION['notaF']=$notaF;

        echo 'Aluno Nº' . $i . ' cadastrado com <strong>sucesso!</strong>';

        echo '<br>teste';

        echo count($aluno);
        echo $idade[1];
        echo $curso[1];
    }
?>