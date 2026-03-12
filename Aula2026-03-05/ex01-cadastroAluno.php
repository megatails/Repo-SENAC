<?php 
    session_start();
    $nome = [];
    $idade = [];
    $curso = [];
    $notaF = [];

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
    <form action="ex01-menu.php" method="post">
        <div class="grid"></div>
            <?php do { ?>
                <div>
                    <h4>Dados do Aluno Nº <?php echo $i+1 ?></h4>
                    <label for="nome">Digite o nome do aluno</label>
                    <input type="text" name="nome<?= $i ?>" id="nome<?= $i ?>" required value="<?=htmlspecialchars($notas[$i])?>">

                    <label for="idade">Digite idade do aluno</label>
                    <input type="number" name="idade<?= $i ?>" id="idade<?= $i ?>" required>

                    <label for="curso">Digite o curso do aluno</label>
                    <input type="text" name="curso<?= $i ?>" id="curso<?= $i ?>" required>

                    <label for="notaF">Digite a nota final do aluno</label>
                    <input min="0" max="10" step="0.01" type="number" name="notaF<?= $i ?>" id="notaF<?= $i ?>" required>

                    <button>Cadastrar</button>
                </div>
            <?php $i++; } while($nome[$i] != empty($nome) && $i < 10);?>
        </div>
    </form>
</body>
</html>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        array_push($nome, $_POST['nome'.$i]);
        array_push($idade, $_POST['idade'.$i]);
        array_push($curso, $_POST['curso'.$i]);
        array_push($notaF, $_POST['notaF'.$i]);

        $_SESSION['nome']=$nome;
        $_SESSION['idade']=$idade;
        $_SESSION['curso']=$curso;
        $_SESSION['notaF']=$notaF;

        echo 'Aluno Nº' . $i . ' cadastrado com <strong>sucesso!</strong>';
    }
?>