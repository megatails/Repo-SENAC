<?php 
    session_start();
    $matricula = $_SESSION['matricula'] ?? [];
    $nome = $_SESSION['nome'] ?? [];
    $nota1 = $_SESSION['nota1'] ?? [];
    $nota2 = $_SESSION['nota2'] ?? [];
    $faltas = $_SESSION['faltas'] ?? [];
    $notafinal = $_SESSION['notafinal'] ?? [];
    $status = $_SESSION['status'] ?? [];
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
                <h2>Estatísticas da Turma</h2>
                
                <?php if(count($notafinal) > 0) { 
                    $mediaGeral = array_sum($notafinal) / count($notafinal);
                    $aprovados = count(array_filter($status, function($s) { return $s === "APROVADO!"; }));
                    $reprovados = count(array_filter($status, function($s) { return $s === "REPROVADO!"; }));
                ?>
                
                <div class="card">
                    <h3>Média Geral da Turma</h3>
                    <p style="font-size: 48px; color: #5865F2; font-weight: bold;">
                        <?= number_format($mediaGeral, 2, ',', '.') ?>
                    </p>
                </div>
                <br>

                <div class="card">
                    <h3>Aprovados</h3>
                    <p style="font-size: 36px; color: mediumseagreen; font-weight: bold;">
                        <?= $aprovados ?> / <?= count($notafinal) ?>
                    </p>
                </div>
                <br>

                <div class="card">
                    <h3>Reprovados</h3>
                    <p style="font-size: 36px; color: #f04747; font-weight: bold;">
                        <?= $reprovados ?> / <?= count($notafinal) ?>
                    </p>
                </div>

                <?php } else { ?>
                <div class="resultado-vazio">Nenhuma nota cadastrada</div>
                <?php } ?>
            </div>
        </div>
    </body>
</html>