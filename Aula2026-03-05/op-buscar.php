<?php 
    session_start();
    $_SESSION['opcao']=3;

    $nome = $_SESSION['nome'];
    $idade = $_SESSION['idade'];
    $curso = $_SESSION['curso'];
    $notaF = $_SESSION['notaF'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
            <div class="grid"></div>
                <div>
                    <h4>Buscar aluno pelo nome</h4><br>
                    <label for="busca">Digite o nome do aluno para buscar:</label>
                    <input type="text" name="busca" id="busca" required>
                    <button>Buscar</button>
                </div>
            </div>
        </form>
</body>
</html>

<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $busca = $_POST['busca'] ?? '';
        echo "Buscando por: " . htmlspecialchars($busca);

        echo "nome:" . implode(", ", $nome);
        echo "idade:" . implode(", ", $idade);
        echo "curso:" . implode(", ", $curso);
        echo "notaF:" . implode(", ", $notaF);
    }
?>