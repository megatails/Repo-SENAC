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
        <label for="nomeTurma">Digite o nome da Turma</label>
        <input id="nomeTurma" name="nomeTurma" type="text" required>

        <input type="submit">
    </form>
    
</body>
</html>

<?php
$turma = $_POST['nomeTurma'];
if(file_exists("turmas.txt"))
{
    $linhas = file("turmas.txt", FILE_IGNORE_NEW_LINES);
    $test = file_get_contents("turmas.txt");
    if(str_contains($test, $turma)){
        $turma = $turma
    };

    echo $linhas . ' LINHAS';
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo $test . ' TESTE';
}
file_put_contents("turmas.txt",$turma.PHP_EOL, FILE_APPEND);



?>