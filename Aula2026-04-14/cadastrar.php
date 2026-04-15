<?php    
    session_start();

    if (isset($_SESSION['matricula']) && is_array($_SESSION['matricula'])) {
    $matricula = $_SESSION['matricula'];
    $nome = $_SESSION['nome'];
    $nota1 = $_SESSION['nota1'];
    $nota2 = $_SESSION['nota2'];
    $faltas = $_SESSION['faltas'];
    } else {
        $matricula = [];
        $nome = [];
        $nota1 = [];
        $nota2 = [];
        $faltas = [];
    }
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $i = count($matricula);
        if (isset($_POST["matricula$i"]) && $_POST["matricula$i"] !== '') {
            {
            $matricula[] = $_POST["matricula$i"];
            $nome[] = $_POST["nome$i"];
            $nota1[] = $_POST["nota1$i"];
            $nota2[] = $_POST["nota2$i"];
            $faltas[] = $_POST["faltas$i"];
            
                $_SESSION['matricula'] = $matricula;
                $_SESSION['nome'] = $nome;
                $_SESSION['nota1'] = $nota1;
                $_SESSION['nota2'] = $nota2;
                $_SESSION['faltas'] = $faltas;
            } 
        }
    }

    $i = count($nome);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro de Alunos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        include('menu.php');
    ?>
        <div class="conteudo">
            <form action="" method="post">
                <div class="form-container">
                        <h4>Dados do Aluno Nº <?= $i + 1 ?></h4>
                        
                        <label for="matricula<?= $i ?>">Digite a matricula do aluno</label>
                        <input type="text" name="matricula<?= $i ?>" 
                            required value="<?= htmlspecialchars($nome[$i] ?? '') ?>">

                        <label for="nome<?= $i ?>">Digite o nome do aluno</label>
                        <input type="text" name="nome<?= $i ?>" 
                            required value="<?= htmlspecialchars($nome[$i] ?? '') ?>">

                        <label for="nota1<?= $i ?>">Digite a 1º nota do aluno</label>
                        <input type="number" name="nota1<?= $i ?>" min="0" max="10" step="0.01"
                            required value="<?= htmlspecialchars($idade[$i] ?? '') ?>">

                        <label for="nota2<?= $i ?>">Digite a 2º nota do aluno</label>
                        <input type="number" name="nota2<?= $i ?>" min="0" max="10" step="0.01"
                            required value="<?= htmlspecialchars($curso[$i] ?? '') ?>">

                        <label for="faltas<?= $i ?>">Digite quantas vezes o Aluno faltou</label>
                        <input min="0" type="number" name="faltas<?= $i ?>" 
                            required value="<?= htmlspecialchars($notaF[$i] ?? '') ?>">

                        <button>Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
</body>
</html>