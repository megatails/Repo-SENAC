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
    
    <form action="votacao.php" method="post">
        <a class="botao-lista" href="index.php"><<<< Voltar</a>
        
        Digite seu email do SENAC abaixo para iniciar a votação:
        <input type="email"><br><br>
    
        <label for="">Selecione sua turma: </label>
        <input id="turma" name="turma"><br><br> <!--id == front / name == back -->

        <label for="nome">Digite seu nome: </label>
        <input id="nome" name="nome"><br><br>

        <label for="cpf">Digite seu CPF: </label>
        <input id="cpf" name="cpf"><br><br>

        <select name="" id="">
            <option value=""></option> <!-- Descobrir como ler os alunos -->
        </select>
        
        

        <input type="submit">
    </form>   
    
</body>
</html>

<?php   
    $nome = $_POST['nome'];
    echo $nome;

?>