<?php 
    session_start();
    $matricula = $_SESSION['matricula'];
    $nome = $_SESSION['nome'];
    $nota1 = $_SESSION['nota1'];
    $nota2 = $_SESSION['nota2'];
    $faltas = $_SESSION['faltas'];
    $notafinal = $_SESSION['notafinal'];
    $status = $_SESSION['status'];
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
                    <td><?= htmlspecialchars($notafinal[$i]) ?></td>
                    <td><?= htmlspecialchars($faltas[$i]) ?></td>
                    <td><?= htmlspecialchars($status[$i]) ?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </body>
</html>