<?php    
    session_start();
    $opcao = $_SESSION['opcao'] ?? 0;

    if (isset($_SESSION['nome']) && is_array($_SESSION['nome'])) {
    $nome = $_SESSION['nome'];
    $idade = $_SESSION['idade'];
    $curso = $_SESSION['curso'];
    $notaF = $_SESSION['notaF'];
    } else {
        $nome = [];
        $idade = [];
        $curso = [];
        $notaF = [];
    }
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $i = count($nome);
        if (isset($_POST["nome$i"]) && $_POST["nome$i"] !== '') {
            if (count($nome) <= 10) 
            {
            $nome[] = $_POST["nome$i"];
            $idade[] = $_POST["idade$i"];
            $curso[] = $_POST["curso$i"];
            $notaF[] = $_POST["notaF$i"];
            
                $_SESSION['nome'] = $nome;
                $_SESSION['idade'] = $idade;
                $_SESSION['curso'] = $curso;
                $_SESSION['notaF'] = $notaF;
            } 
            else
            {
                echo "<br>Limite de 10 alunos atingido. Não é possível cadastrar mais alunos.";
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
    <div class="lateral">
            <a class='msg' href='ex01-cadastrar.php'>Cadastrar Alunos</a>
            <a class='msg' href='ex01-listar.php'>Listar Alunos</a>
            <a class='msg' href='ex01-buscar.php'>Buscar aluno pelo nome</a>
            <a class='msg' href='ex01-calcular.php'>Calcular média da turma</a>
    </div>
        <div class="conteudo">
            <form action="" method="post">
                <div class="form-container">
                        <h4>Dados do Aluno Nº <?= $i + 1 ?></h4>

                        <label for="nome<?= $i ?>">Digite o nome do aluno</label>
                        <input type="text" name="nome<?= $i ?>" id="nome<?= $i ?>"
                            required value="<?= htmlspecialchars($nome[$i] ?? '') ?>">

                        <label for="idade<?= $i ?>">Digite idade do aluno</label>
                        <input type="number" name="idade<?= $i ?>" id="idade<?= $i ?>"
                            required value="<?= htmlspecialchars($idade[$i] ?? '') ?>">

                        <label for="curso<?= $i ?>">Digite o curso do aluno</label>
                        <input type="text" name="curso<?= $i ?>" id="curso<?= $i ?>"
                            required value="<?= htmlspecialchars($curso[$i] ?? '') ?>">

                        <label for="notaF<?= $i ?>">Digite a nota final do aluno</label>
                        <input min="0" max="10" step="0.01" type="number"
                            name="notaF<?= $i ?>" id="notaF<?= $i ?>" 
                            required value="<?= htmlspecialchars($notaF[$i] ?? '') ?>">

                        <button>Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
</body>
    <br><br><br><a class='menu' href='index.php'>Sair</a>
</html>