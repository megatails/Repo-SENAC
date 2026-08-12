<?php

require_once 'Contato.php';
require_once 'GerenciadorDeContatos.php';

$gerenciadorDeContatos = new GerenciadorDeContatos();


if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        if (isset($_POST['nome'], $_POST['email'], $_POST['telefone']))
            {
                $gerenciadorDeContatos->adicionarContato($_POST['nome'], $_POST['email'], $_POST['telefone']);
            }

        if (isset($_POST['deletar']))
            {
                $gerenciadorDeContatos->deletarContato($_POST['deletar']);
            }
        $_COOKIE['contatos'] = $gerenciadorDeContatos->getContatos();
        $contatos = $_COOKIE['contatos'];
    }


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gerenciador de Contatos</title>
</head>
<body>
    <h1>Gerenciador de Contatos</h1>
    <!-- Formulário para adicionar um novo contato -->
     <form method="POST" action="">
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="tel" name="telefone" placeholder="Telefone" required><br>
        <button type="submit">Adicionar Contato</button>
     </form>

<!-- Lista de Contatos -->
    <ul>
        <?php foreach ($contatos as $indice => $contato): ?>
            <li>
                <strong>Nome:</strong> <?= htmlspecialchars($contato->getNome()) ?> <br>
                <strong>Email:</strong> <?= htmlspecialchars($contato->getEmail()) ?> <br>
                <strong>Telefone:</strong> <?= htmlspecialchars($contato->getTelefone()) ?> <br>
                <form method="POST" action="" style="display:inline;">
                    <button type="submit" name="deletar" value="<?= $indice ?>">Excluir</button>
                </form>
            </li>
        <?php endforeach; echo isset($indice) ? count($_COOKIE['contatos']) . " e também " . $contatos : 'Nenhum cadastro encontrado'; ?>
    </ul>
</body>
</html>