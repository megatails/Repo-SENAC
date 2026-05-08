<?php 
    session_start();
    $_SESSION['opcao']=3;

    $nome = $_SESSION['nome'];
    $idade = $_SESSION['idade'];
    $curso = $_SESSION['curso'];
    $notaF = $_SESSION['notaF'];

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
        <div class="lateral">
            <a class='msg' href='ex01-cadastrar.php'>Cadastrar Alunos</a>
            <a class='msg' href='ex01-listar.php'>Listar Alunos</a>
            <a class='msg' href='ex01-buscar.php'>Buscar aluno pelo nome</a>
            <a class='msg' href='ex01-calcular.php'>Calcular média da turma</a>
        </div>

        <div class="conteudo">
            <form action="" method="post">
                <h2>Buscar aluno pelo nome</h2>
                <div class="form-container">
                    <div>
                        <label for="busca">Digite o nome do aluno para buscar:</label>
                        <input type="text" name="busca" id="busca" required>
                        <button>Buscar</button>
                    </div>
                </div>
                <table>
                    <tr>
                        <th>Nome<span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span></th>
                        <th>Idade<span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span></th>
                        <th>Curso<span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span></th>
                        <th>Nota Final<span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span></th>
                    </tr>
                    <?php 
                    $nomeBusca = [];
                    $idadeBusca = [];
                    $cursoBusca = [];
                    $notaFBusca = [];
                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($busca)) {
                        for ($i = 0; $i < count($nome); $i++) {
                            if (isset($nome[$i]) && stripos($nome[$i], $busca) !== false) {
                                $nomeBusca[] = $nome[$i];
                                $idadeBusca[] = $idade[$i];
                                $cursoBusca[] = $curso[$i];
                                $notaFBusca[] = $notaF[$i];
                            }
                        }
                        for ($j = 0; $j < count($nomeBusca); $j++) { ?>
                    <tr>
                        <td><?= htmlspecialchars($nomeBusca[$j]) ?></td>
                        <td><?= htmlspecialchars($idadeBusca[$j]) ?></td>
                        <td><?= htmlspecialchars($cursoBusca[$j]) ?></td>
                        <td><?= htmlspecialchars($notaFBusca[$j]) ?></td>
                    </tr>
                <?php } } ?>
                </table>
            </form>
        </div>
    </body>
    <br><br><br><a class='menu' href='index.php'>Sair</a>
</html>