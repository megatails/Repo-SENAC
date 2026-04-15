<?php 
    session_start();
    $matricula = $_SESSION['matricula'];
    $nome = $_SESSION['nome'];
    $nota1 = $_SESSION['nota1'];
    $nota2 = $_SESSION['nota2'];
    $faltas = $_SESSION['faltas'];
    $notafinal = $_SESSION['notafinal'];
    $status = $_SESSION['status'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calcular Média</title>
</head>
    <body>
    <?php 
        include('menu.php');
    ?>
        <div class="conteudo">
            <div class="form-container media-card">
            <h2>Média das notas da Turma</h2>
                <?php if(count($nota1) > 0) { ?>
                    <div class="resultado">
                    <?php echo array_sum($nota1 + $nota2) / count($nota1 + $nota2); ?>
                </div>

                <?php } else { ?>
                <div class="resultado-vazio">Nenhuma nota cadastrada</div>

                <?php } ?>
            </div>
        </div>
    </body>
    <br><br><br><a class='menu' href='index.php'>Sair</a>
</html>