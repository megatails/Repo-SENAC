<?php
    session_start();
    $opcao = $_SESSION['opcao'] ?? 0;
    
    $nome  = isset($_SESSION['nome']) && is_array($_SESSION['nome']) ? $_SESSION['nome'] : [];
    $idade = isset($_SESSION['idade']) && is_array($_SESSION['idade']) ? $_SESSION['idade'] : [];
    $curso = isset($_SESSION['curso']) && is_array($_SESSION['curso']) ? $_SESSION['curso'] : [];
    $notaF = isset($_SESSION['notaF']) && is_array($_SESSION['notaF']) ? $_SESSION['notaF'] : [];

    $i = count($nome);

    $menu = 
   "<a class='msg' href='op-cadastrar.php'>Cadastrar Alunos</a>
    <a class='msg' href='op-listar.php'>Listar Alunos</a>
    <a class='msg' href='op-buscar.php'>Buscar aluno pelo nome</a>
    <a class='msg' href='op-calcular.php'>Calcular média da turma</a>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro de Alunos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php if ($opcao === 0) { ?>
        <h2>Bem-vindo ao Sistema de Cadastro de Alunos</h2>
        <p>Escolha uma opção no menu para começar.</p>

    <?php echo $menu;} elseif ($opcao === 1) { ?>
        <form action="" method="post">
            <div class="grid">
                <div>
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

    <?php } elseif ($opcao === 2) { ?>
        <form action="" method="post">
            <div class="grid"></div>
                <div>
                    <h4>Listar Alunos<?php echo $i+1 ?></h4>
                </div>
            </div>
        </form>

    <?php } elseif ($opcao === 3) { ?>
        <form action="" method="post">
            <div class="grid"></div>
                <div>
                    <h4>Buscar aluno pelo nome<?php echo $i+1 ?></h4>
                </div>
            </div>
        </form>

    <?php } elseif ($opcao === 4) { ?>
        <form action="" method="post">
            <div class="grid"></div>
                <div>
                    <h4>Calcular média da turma <?php echo $i+1 ?></h4>
                </div>
            </div>
        </form>

    <?php } else { ?>
        <h2>Bem-vindo ao Sistema de Cadastro de Alunos</h2>
        <p>Escolha uma opção no menu para começar.</p>
        
    <?php echo $menu; } ?>

    
</body>
    <br><br><br><a class='menu' href='index.php'>Sair</a>
    <button type="button" onclick="limparArray()"> "limpar array"</button>; 
</html>

<?php 
    function limparArray() {
        $_SESSION['nome'] = [];
        $_SESSION['idade'] = [];
        $_SESSION['curso'] = [];
        $_SESSION['notaF'] = [];
    }
?>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(!empty($_POST["nome{$i}"])) {
            if (count($nome) < 10) {
                $nome[] = $_POST["nome{$i}"];
                $idade[] = $_POST["idade{$i}"];
                $curso[] = $_POST["curso{$i}"];
                $notaF[] = $_POST["notaF{$i}"];

                array_push($_SESSION['nome'], $nome[$i]);
                array_push($_SESSION['idade'], $idade[$i]);
                array_push($_SESSION['curso'], $curso[$i]);
                array_push($_SESSION['notaF'], $notaF[$i]);

                echo "<br>Aluno Nº $i cadastrado com <strong>sucesso!</strong>";

                echo '<br>';

                echo $nome[1];
                echo $idade[1];
                echo $curso[1];
                echo $notaF[1];
            } else {
                echo "<br>Limite de 10 alunos atingido. Não é possível cadastrar mais alunos.";
            }
        }
    }
    echo '<br>nome = ' . implode(', ', $nome);
    echo '<br>idade = ' . implode(', ', $idade);
    echo '<br>curso = ' . implode(', ', $curso);
    echo '<br>notaF =' . implode(', ', $notaF);
?>