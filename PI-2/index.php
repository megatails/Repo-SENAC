<?php
    session_start();
    $chkEmail = $_SESSION['entryEmail'] ?? '';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Biblioteca Digital Municipal</title>
</head>
<body>
        <?php 
            include('menu.php');
        ?>
    
    <div class="conteudo"><br><br><br>
        <div class="card">
            <h1>Dra. Ana</h1>
            <p>A biblioteca Digital Municipal tem como missão promover o acesso ao conhecimento, à
                cultura e à educação por meio de um acervo digital acessível a toda comunidade.</p>
                <br>
                <p>Nosso sistema permite consultar obras literárias, acessar livros digitais e incentivar
                    a leitura através da tecnologia.
                    Este Ambiente foi desenvolvido para facilitar o gerenciamento do acervo bibliografico 
                    e aproximar leitores do universo literário
                </p>
            </div>
        <div class="media-card">
            <img width="100%" src="\Images\banana.gif" alt="Potassio">
        </div>
        
    </div>

</body>
</html>