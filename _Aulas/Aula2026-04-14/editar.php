<?php    
    session_start();
    $idAluno = isset($_POST['idAluno']) ? $_POST['idAluno'] : 0;

    if (isset($_SESSION['matricula']) && is_array($_SESSION['matricula'])) {
    $matricula = $_SESSION['matricula'];
    $nome = $_SESSION['nome'];
    $nota1 = $_SESSION['nota1'];
    $nota2 = $_SESSION['nota2'];
    $faltas = $_SESSION['faltas'];
    $notafinal = $_SESSION['notafinal'];
    $status = $_SESSION['status'];
    } else {
        echo '<span class="resultado"> an error has occurred</span>';
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["matriculaEdit"])) {
        $frequencia = (256 - $_POST['faltasEdit']) / 256 * 100;

        if ((($_POST['nota1Edit'] + $_POST['nota2Edit']) / 2) >= 6 && $frequencia > 65 ) {
            $status[$idAluno] = "APROVADO!";
        } else {
            $status[$idAluno] = "REPROVADO!";
        }

        $_SESSION['matricula'][$idAluno] = $_POST['matriculaEdit'];
        $_SESSION['nome'][$idAluno] = $_POST['nomeEdit'];
        $_SESSION['nota1'][$idAluno] = $_POST['nota1Edit'];
        $_SESSION['nota2'][$idAluno] = $_POST['nota2Edit'];
        $_SESSION['faltas'][$idAluno] = $_POST['faltasEdit'];
        $_SESSION['notafinal'][$idAluno] = (($_POST['nota1Edit'] + $_POST['nota2Edit']) / 2);
        $_SESSION['status'][$idAluno] = $status[$idAluno];
        
        header("Location: buscar.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Aluno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        include('menu.php');
    ?>
    <div class="conteudo">
        <form action="" method="post">
            <input type="hidden" name="idAluno" value="<?= $idAluno ?>">
            <div class="form-container">
                    <h4>Dados do Aluno Nº <?= $idAluno+1 ?></h4>
                    
                    <label for="matriculaEdit">Digite a matricula do aluno</label>
                    <input type="text" name="matriculaEdit" placeholder="<?= $matricula[$idAluno] ?>"
                        required value="<?= htmlspecialchars($matricula[$idAluno] ?? '') ?>">

                    <label for="nomeEdit">Digite o nome do aluno</label>
                    <input type="text" name="nomeEdit" placeholder="<?= $nome[$idAluno+1] ?>"
                        required value="<?= htmlspecialchars($nome[$idAluno] ?? '') ?>">

                    <label for="nota1Edit">Digite a 1º nota do aluno</label>
                    <input type="number" name="nota1Edit" min="0" max="10" step="0.01" placeholder="<?= $nota1[$idAluno] ?>"
                        required value="<?= htmlspecialchars($nota1[$idAluno] ?? '') ?>">

                    <label for="nota2Edit">Digite a 2º nota do aluno</label>
                    <input type="number" name="nota2Edit" min="0" max="10" step="0.01" placeholder="<?= $nota2[$idAluno] ?>"
                        required value="<?= htmlspecialchars($nota2[$idAluno] ?? '') ?>">

                    <label for="faltasEdit">Digite quantas vezes o Aluno faltou</label>
                    <input type="number" name="faltasEdit" min="0" placeholder="<?= $faltas[$idAluno] ?>"
                        required value="<?= htmlspecialchars($faltas[$idAluno] ?? '') ?>">

                    <button>Finalizar Edição</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>


?>