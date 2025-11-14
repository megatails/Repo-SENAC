<?php
    $varNome = $_POST['nome'];
    $varCPF = $_POST['cpf'];
    $varFreq = $_POST['vezes'];
    $varTime = $_POST['clube'];
    $varSocio = (isset($_POST['socio']) ? 'Sim' : 'Não');
?>


<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados!</title>
    <link rel="stylesheet" href="/Styles/style2.css">
</head>

<body>
    <h1>
        Dados do Torcedor Recebidos com Sucesso!
    </h1>
    <p>Nome: <?php echo $varNome; ?> </p>
    <p>CPF: <?php echo $varCPF; ?> </p>
    <p>Frequência do Estádio: <?php echo $varFreq; ?> </p>
    <p>Time do Coração: <span><img width=1% src="/WhatsApp.svg.png" alt="zapzap"></span> <?php echo $varTime; ?> </p>
    <p>é Socio: <?php echo $varSocio; ?> </p>

</body>
</html>