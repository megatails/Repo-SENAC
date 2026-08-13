<?php
require_once 'Contato.php';
require_once 'GerenciadorDeContatos.php';

session_start();

if (!isset($_SESSION['contatos'])) {
    $_SESSION['contatos']=[];
}

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

        if (isset($_POST['editar']))
            {
                $indice = $_POST['editar'];
                // $gerenciadorDeContatos->editarContato($indice);
            }

    }

$contatos = $gerenciadorDeContatos->getContatos();
?>

<!DOCTYPE html>
<html lang="pt-br">
<style>
    :root{
        color-scheme: dark light;
    }
</style>
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
        <button type="submit" class="add" name="add">Adicionar Contato</button>
     </form>

<!-- Lista de Contatos -->

    <ul>
        <?php foreach ($contatos as $indice => $contato): ?>
            <li id="<?= $indice ?>">
                <strong>Nome:</strong> <?= htmlspecialchars($contato->getNome()) ?> <br>
                <strong>Email:</strong> <?= htmlspecialchars($contato->getEmail()) ?> <br>
                <strong>Telefone:</strong> <?= htmlspecialchars($contato->getTelefone()) ?> <br>
                <form method="POST" action="" style="display:inline;">
                    <button type="submit" name="deletar" value="<?= $indice ?>">Excluir</button>
                    <button type="button" class="editar" name="editar" data-nome="<?= $contato->getNome()?>" data-email="<?= $contato->getEmail() ?>" data-telefone="<?= $contato->getTelefone() ?>" value="<?= $indice ?>">Editar</button>
                </form>
            </li>
        <?php endforeach; echo isset($indice) ? '' : 'Nenhum cadastro encontrado'; ?>
    </ul>
</body>
</html>

<script>

    var btnsEditar = document.querySelectorAll(".editar");

    btnsEditar.forEach(btnEditar => {
        btnEditar.addEventListener("click", function(){
            btnEditar.dataset.nome //asdfasdfasfiasliudfaskuydfgawsiuyfsidufyhagweofiu

            var indice = this.value;
            var itens = document.querySelectorAll("li");
            itens.forEach(item => {
                if(item.getAttribute("id") == indice)
                    item.style.display = "block";
                else
                    item.style.display = "none";
            });

        });
    });

    // btnsAdicionar.forEach(btnAdicionar => {
    //     btnAdicionar.addEventListener("click", function(){

    //     });
    // });
</script>