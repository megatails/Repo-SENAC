<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <body>
    <form action="" method="post">
        <h4>Digite o nome do aluno Nº <?= $i + 1 ?></h4>
        <label for="nome<?=$i?>">Nome:</label>
        <input type="text" id="nome<?=$i?>" name="nome<?=$i?>">
        <input type="submit">
    </form>    
</body>

<?php
    echo '<br><br>' . $i;

    echo "<br><br>Olá! Nomes cadastrados: " . implode(', ', $nome);
?>