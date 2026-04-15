<?php 
    session_start();
    $matricula = $_SESSION['matricula'];
    $nome = $_SESSION['nome'];
    $nota1 = $_SESSION['nota1'];
    $nota2 = $_SESSION['nota2'];
    $faltas = $_SESSION['faltas'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" >
    <title>Listagem de Alunos</title>
</head>
<body>
    <?php 
        include('menu.php');
    ?>
        <div class="conteudo">
            <h2>Lista de Alunos Cadastrados</h2>
            <table class="form-container">
                <tr>
                    <th>Matricula</th>
                    <th>Nome</th>
                    <th>Nota1</th>
                    <th>Nota2</th>
                    <th>Nota Final</th>
                    <th>Faltas</th>
                    <th>Status</th> 
                <!-- se o aluno passou ou nao -->
                </tr>
                <?php for ($i = 0; $i < count($matricula); $i++) { ?>
                <tr>
                    <td><?= htmlspecialchars($matricula[$i]) ?></td>
                    <td><?= htmlspecialchars($nome[$i]) ?></td>
                    <td><?= htmlspecialchars($nota1[$i]) ?></td>
                    <td><?= htmlspecialchars($nota2[$i]) ?></td>
                    <td><?= htmlspecialchars(($nota1[$i] + $nota2[$i]) / 2) ?></td>
                    <td><?= htmlspecialchars($faltas[$i]) ?></td>
                    <?php $frequencia = (256 - $faltas[$i]) / 256 * 100;
                     ?>
                    <td><?php if ((($nota1[$i] + $nota2[$i]) / 2) >= 6 && $frequencia > 65 ) {
                        echo "<span style='color: lightgreen'>APROVADO! </span>";
                    }  else {
                        echo "<span style='color: crimson'>REPROVADO! </span>";
                    }
                    ?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </body>
</html>