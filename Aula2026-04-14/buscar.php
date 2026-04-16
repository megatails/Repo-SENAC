<?php 
    session_start();
    $_SESSION['opcao']=3;

    $matricula = $_SESSION['matricula'];
    $nome = $_SESSION['nome'];
    $nota1 = $_SESSION['nota1'];
    $nota2 = $_SESSION['nota2'];
    $faltas = $_SESSION['faltas'];
    $notafinal = $_SESSION['notafinal'];
    $status = $_SESSION['status'];

    $busca = $_POST['busca'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Buscar Alunos</title>
</head>
    <body>
        <?php 
            include('menu.php');
        ?>

        <div class="conteudo">
            <form action="" method="post">
                <div class="form-container">
                <h2>Buscar aluno pelo nome</h2>
                        <label for="busca">Digite a matricula do aluno para buscar:</label>
                        <input type="text" name="busca" id="busca">
                        <button>Buscar</button>
                </div>
            </form><br><br>
                <table class="form-container">
                    <tr>
                        <th>Ações</th>
                        <th>Matricula</th>
                        <th>Nome</th>
                        <th>Nota1</th>
                        <th>Nota2</th>
                        <th>Nota Final</th>
                        <th>Faltas</th>
                        <th>Status</th> 
                    </tr>
                    <?php 
                    $matriculaBusca = [];
                    $nomeBusca = [];
                    $nota1Busca = [];
                    $nota2Busca = [];
                    $notaFBusca = [];
                    $faltasBusca = [];
                    $notaFBusca = [];
                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($busca)) {
                        for ($i = 0; $i < count($matricula); $i++) {
                            if (isset($matricula[$i]) && stripos($matricula[$i], $busca) !== false) {
                                $matriculaBusca[] = $matricula[$i];
                                $nomeBusca[] = $nome[$i];
                                $nota1Busca[] = $nota1[$i];
                                $nota2Busca[] = $nota2[$i];
                                $notaFBusca[] = $notaF[$i];
                                $faltasBusca[] = $faltas[$i];
                            }
                        }
                        if (empty($matriculaBusca)) {
                            echo "<caption>
                                    Nenhum Aluno encontrado.
                                  </caption>";
                        }
                        for ($j = 0; $j < count($matriculaBusca); $j++) { ?>
                    <tr>
                        <td> <form action="editar.php" method="post"> 
                            <input type="text" name="matriculaEdit" hidden value="<?= $matriculaBusca[$j] ?>"> 
                            <input type="text" name="nomeEdit" hidden value="<?= $nomeBusca[$j] ?>"> 
                            <input type="number" name="nota1Edit" hidden value="<?= $nota1Busca[$j] ?>"> 
                            <input type="number" name="nota2Edit" hidden value="<?= $nota2Busca[$j] ?>">
                            <input type="number" name="faltasEdit" hidden value="<?= $faltasBusca[$j] ?>">    
                            <input type="number" name="idAluno" hidden value="<?= $j ?>">  

                            <button >Editar</button> 
                            </form>
                        </td>
                        <td><?= htmlspecialchars($matriculaBusca[$j]) ?></td>
                        <td><?= htmlspecialchars($nomeBusca[$j]) ?></td>
                        <td><?= htmlspecialchars($nota1Busca[$j]) ?></td>
                        <td><?= htmlspecialchars($nota2Busca[$j]) ?></td>
                        <td><?= htmlspecialchars($notaFBusca[$j]) ?></td>
                        <td><?= htmlspecialchars($faltasBusca[$j]) ?></td>
                        <td><?= htmlspecialchars($statusBusca[$j]) ?></td>
                    </tr>
                    <?php } } elseif (empty($busca)) {
                        for ($i = 0; $i < count($matricula); $i++) { ?>
                        <tr>
                            <td><?= htmlspecialchars($matricula[$i]) ?></td>
                            <td><?= htmlspecialchars($nome[$i]) ?></td>
                            <td><?= htmlspecialchars($nota1[$i]) ?></td>
                            <td><?= htmlspecialchars($nota2[$i]) ?></td>
                            <td><?= htmlspecialchars($notafinal[$i]) ?></td>
                            <td><?= htmlspecialchars($faltas[$i]) ?></td>
                            <td><?= htmlspecialchars($status[$i]) ?></td>
                        </tr>
                    <?php } } ?>
                </table>
        </div>
    </body>

</html>