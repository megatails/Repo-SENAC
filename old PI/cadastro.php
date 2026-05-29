<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">6
    <title>Cadastro</title>
</head>
<body>
    <form action="">
        <h2>Bem Vindo! Realize o seu cadastro!</h2>
        <p>Ele será necessario para que consiga fazer o agendamento</p>
            <label for="nome">Digite seu Nome: </label>
            <input type="text" name="nome" id="nome">

            <label for="cpf">Digite seu CPF: </label>
            <input type="number" max="11" name="cpf" id="cpf">

            <label for="dataNasc">Digite sua Data de Nascimento: </label>
            <input type="datetime" name="dataNasc" id="dataNasc">

            <label for="email">Digite seu email: </label>
            <input type="email" name="email" id="email">

            <label for="cel">Digite seu telefone/celular: </label>
            <input type="number" name="cel" id="cel">

            <label for="obs">Observações</label>
            <input type="date" name="obs" id="obs">
    </form>
</body>
</html>

<?php 
    date()
?>