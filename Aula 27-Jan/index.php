<?php 


?>
    
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Representante</title>
</head>
<body>
    Olá,boas vindas à votação do Representante de turma!<br>

    Digite seu email do SENAC abaixo para iniciar a votação:
    <input type="email"><br><br>
    <form action="" method="post">
        <label for="">Selecione sua turma: </label>
        <input id="turma" name="turma"><br><br>

        <label for="nome">Digite seu nome: </label>
        <input id="nome" name="nome"><br><br>

        <label for="cpf">Digite seu CPF: </label>
        <input id="cpf" name="cpf"><br><br>
        
        

        <input type="submit">
    </form>
    
    
</body>
</html>

<?php   
    $nome = $_POST['nome'];
    echo $nome;
?>