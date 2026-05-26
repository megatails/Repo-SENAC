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

    $filtro = $_POST['filtro'] ?? 'todos';
    $indicesAlunos = [];

    // Processa o filtro e popula um array com os índices a exibir
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        switch ($filtro) {
            case 'maiorMedia':
                if (count($notafinal) > 0) {
                    $indicesAlunos[] = array_search(max($notafinal), $notafinal);
                }
                break;

            case 'menorMedia':
                if (count($notafinal) > 0) {
                    $indicesAlunos[] = array_search(min($notafinal), $notafinal);
                }
                break;

            case 'aprovados':
                for ($i = 0; $i < count($status); $i++) {
                    if ($status[$i] === "APROVADO!") {
                        $indicesAlunos[] = $i;
                    }
                }
                break;

            case 'reprovados':
                for ($i = 0; $i < count($status); $i++) {
                    if ($status[$i] === "REPROVADO!") {
                        $indicesAlunos[] = $i;
                    }
                }
                break;

            default:
                if (!empty($_POST['busca'])) {
                    for ($i = 0; $i < count($matricula); $i++) {
                        if (stripos($matricula[$i], $_POST['busca']) !== false) {
                            $indicesAlunos[] = $i;
                        }
                    }
                } else {
                    for ($i = 0; $i < count($matricula); $i++) {
                        $indicesAlunos[] = $i;
                    }
                }
        }
    } else {
        for ($i = 0; $i < count($matricula); $i++) {
            $indicesAlunos[] = $i;
        }
    }
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
                <h2>Buscar Alunos</h2>
                        <label for="busca">Digite a matricula do aluno para buscar:</label>
                        <input type="text" name="busca" id="busca">
                        
                        <label for="filtro">Filtrar por:</label>
                        <select name="filtro" id="filtro">
                            <option value="todos">Todos</option>
                            <option value="aprovados">Aprovados</option>
                            <option value="reprovados">Reprovados</option>
                            <option value="maiorMedia">Maior Média</option>
                            <option value="menorMedia">Menor Média</option>
                        </select>
                        
                        <button>Filtrar</button>
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
                    <?php foreach ($indicesAlunos as $i) { ?>
                    <tr>
                        <td> <form action="editar.php" method="post"> 
                            <input type="number" name="idAluno" hidden value="<?= $i ?>">  
                            <button type="submit" class="btn">Editar</button>
                            </form>
                        </td>
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
            <div class="form-container" style="padding: 15px; margin-top: 20px;">
                <h3>Total de Alunos Cadastrados: <span style="color: #5865F2; font-weight: bold;"><?= count($nome) ?></span></h3>
            </div>
        </div>
    </body>

</html>