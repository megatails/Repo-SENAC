<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $raAluno = $_POST["aluno"];
    file_put_contents( "./Aula27-Jan/votos.txt", $raAluno.PHP_EOL  , FILE_APPEND );
    $votos = file_get_contents("./Aula27-Jan/votos.txt");
    $alunosArray = file("./Aula27-Jan/alunos.txt");
}
?>

<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
</head>
<body>    
    <div class="container">
        <table>
            <tr>
                <th>Aluno</th>
                <th>Turma</th>
                <th>Votos</th>
            </tr><?php
            foreach ($alunosArray as $alunoLinha): ?>
                <tr><?php
                    $alunoDados = explode(' | ', $alunoLinha);
                    $qntVotos = substr_count($votos, $alunoDados[1]);?>
                    <td> <?= $alunoDados[0] ?> </td>
                    <td> <?= $alunoDados[2] ?> </td>
                    <td> <?= $qntVotos ?> </td>
                </tr> <?php
            endforeach;?>
        </table>
        <a class="botao-lista principal" href="votacao.php"><<<< Votar novamente</a>
    </div>
</body>
</html>