<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastrar Turmas</title>
</head>
<body>
    <form action="" method="post">
        <a class="botao-lista principal" href="index.php"><<<< Voltar</a>
        <label for="nomeTurma">Digite o nome da Turma</label>
        <input id="nomeTurma" name="nomeTurma" type="text" required>

        <input type="submit">
    </form>
    
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeTurma = $_POST['nomeTurma'];
    if(file_exists("turmas.txt"))
    {
        $dados = file_get_contents("turmas.txt");

        $qnt = str_word_count($dados, 0, $nomeTurma);
        echo $qnt;

    }
    file_put_contents("turmas.txt",($nomeTurma . $qnt+1).PHP_EOL, FILE_APPEND);
    header("Location: completo.php");
    exit();
}

?>