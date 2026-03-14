<?php 

    $i = count($nome);
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
        <label for="nome<?=$i?>">Nome:</label>
        <input type="text" id="nome<?=$i?>" name="nome<?=$i?>">
        <button type="submit">Enviar</button>
    </form>    
</body>
</html>

<?php

    array_push($nome, $_POST["nome{$i}"]);

    $AAA= ['ABC', 'DEF', 'GHI'];
    echo "Olá, filho da puta!   " . implode(', ', $AAA);

    echo '<br><br>' . $i;
    
    echo "<br><br>Olá, filho da puta!   " . implode(', ', $nome);
?>