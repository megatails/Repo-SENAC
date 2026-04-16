<?php    
    session_start();

    if (isset($_SESSION['matricula']) && is_array($_SESSION['matricula'])) {
    $matricula = $_SESSION['matricula'];
    $nome = $_SESSION['nome'];
    $nota1 = $_SESSION['nota1'];
    $nota2 = $_SESSION['nota2'];
    $faltas = $_SESSION['faltas'];
    $notafinal = $_SESSION['notafinal'];
    $status = $_SESSION['status'];
    } else {
        $matricula = [];
        $nome = [];
        $nota1 = [];
        $nota2 = [];
        $faltas = [];
        $notafinal = [];
        $status = [];
    }
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST["matriculaEdit"]) && $_POST["matriculaEdit"] !== '') {
            {
            $idAluno = $_POST['idAluno'];
            $matricula[$idAluno] = $_POST["matriculaEdit"];
            $nome[$idAluno] = $_POST["nomeEdit"];
            $nota1[$idAluno] = $_POST["nota1Edit"];
            $nota2[$idAluno] = $_POST["nota2Edit"];
            $faltas[$idAluno] = $_POST["faltasEdit"];
            $notafinal[] = (($nota1[$iidAluno] + $nota2[$idAluno]) / 2);
            $frequencia = (256 - $faltas[$idAluno]) / 256 * 100;

            if ((($nota1[$idAluno] + $nota2[$idAluno]) / 2) >= 6 && $frequencia > 65 ) {
                $status[$idAluno] = "APROVADO!";
            }  else {
                $status[$idAluno] = "REPROVADO!";
            }
            
            
                $_SESSION['matricula'] = $matricula[$idAluno];
                $_SESSION['nome'] = $nome[$idAluno];
                $_SESSION['nota1'] = $nota1[$idAluno];
                $_SESSION['nota2'] = $nota2[$idAluno];
                $_SESSION['faltas'] = $faltas[$idAluno];
                $_SESSION['notafinal'] = $notafinal[$idAluno];
                $_SESSION['status'] = $status[$idAluno];
            } 
        }
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
                <div class="form-container">
                        <h4>Dados do Aluno Nº <?= $idAluno ?></h4>
                        
                        <label for="matriculaEdit">Digite a matricula do aluno</label>
                        <input type="text" name="matriculaEdit" placeholder="<?= $matricula[$idAluno] ?>"
                            required value="<?= htmlspecialchars($nome[$idAluno] ?? '') ?>">

                        <label for="nomeEdit">Digite o nome do aluno</label>
                        <input type="text" name="nomeEdit" placeholder="<?= $nome[$idAluno] ?>"
                            required value="<?= htmlspecialchars($nome[$idAluno] ?? '') ?>">

                        <label for="nota1Edit">Digite a 1º nota do aluno</label>
                        <input type="number" name="nota1Edit" min="0" max="10" step="0.01" placeholder="<?= $nota1[$idAluno] ?>"
                            required value="<?= htmlspecialchars($idade[$idAluno] ?? '') ?>">

                        <label for="nota2Edit">Digite a 2º nota do aluno</label>
                        <input type="number" name="nota2Edit" min="0" max="10" step="0.01" placeholder="<?= $nota2[$idAluno] ?>"
                            required value="<?= htmlspecialchars($curso[$idAluno] ?? '') ?>">

                        <label for="faltasEdit">Digite quantas vezes o Aluno faltou</label>
                        <input min="0" type="number" name="faltasEdit" placeholder="<?= $faltas[$idAluno] ?>"
                            required value="<?= htmlspecialchars($notaF[$idAluno] ?? '') ?>">

                        <button>Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
</body>
</html>