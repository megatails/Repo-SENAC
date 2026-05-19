<!DOCTYPE html>
<html lang="pt-BR">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h4>Agendar Horario</h2>
    <form action="salvar.php" method="post">
        <select name="servico">
            <option >Escova</option>
            <option >Manicure</option>
            <option >Pedicure</option>
            <option >Maquiagem</option>
            <option >Compactação</option>
        </select>
        <label for="nome">Nome</label>
        <input type="text" name="nome" required>
        <label for="telefone">Telefone</label>
        <input type="tel" name="telefone">
        <label for="data">Data</label>
        <input type="date" name="data" required>
        <label for="hora">Hora</label>
        <input type="time" name="hora">
        <button type="submit">Agendar</button>
    </form>
    <a class="botao-lista" href="listar.php">Ver Agendamento</a>
    </div>
</body>
</html>