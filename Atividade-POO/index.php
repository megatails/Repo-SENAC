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
    // Processar modificações primeiro
    if (isset($_POST['salvar']))
    {
        $indice = $_POST['indice'];
        $gerenciadorDeContatos->atualizarContato($_POST['nome'], $_POST['email'], $_POST['telefone'], $indice);
    }

    if (isset($_POST['add']))
    {
        $gerenciadorDeContatos->adicionarContato($_POST['nome'], $_POST['email'], $_POST['telefone']);
    }

    if (isset($_POST['deletar']))
    {
        $gerenciadorDeContatos->deletarContato($_POST['deletar']);
    }

    // Recarregar lista atualizada
    $contatos = $gerenciadorDeContatos->getContatos();

    // Busca por nome (case-insensitive, parcial)
    if (isset($_POST['buscar']))
    {
        $filtro = trim($_POST['filtro'] ?? '');
        if ($filtro === '') {
            // manter todos
            $contatos = $gerenciadorDeContatos->getContatos();
        } else {
            $contatos = $gerenciadorDeContatos->buscarContato($filtro);
        }
    }

    if (isset($_POST['limpar'])) {
        $contatos = $gerenciadorDeContatos->getContatos();
    }
}

if (!isset($contatos)) {
    $contatos = $gerenciadorDeContatos->getContatos();
}
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

    <form method="POST" action="" style="margin-bottom:12px;">
        <input type="text" name="filtro" placeholder="Procurar contato por nome">
        <button type="submit" name="buscar">Buscar</button>
        <button type="submit" name="limpar">Limpar</button>
    </form>
    <br><br>

    <!-- Formulário para adicionar um novo contato -->
     <form method="POST" action="">
          <input type="hidden" id="indice" name="indice" value="">
        <input type="text" id="nome" name="nome" placeholder="Nome" required>
        <input type="email" id="email" name="email" placeholder="Email" required>
        <input type="tel" id="telefone" name="telefone" placeholder="Telefone" required><br>

        <br>
        <button type="submit" id="add" class="add" name="add">Adicionar Contato</button>
        <button type="button" id="cancel" name="cancel" style="display: none;">Cancelar</button>
     </form>
     <br><br>
    <?= isset($_POST['buscar']) ? 'Resultados para: ' . htmlspecialchars($_POST['filtro']) : '' ?>
<!-- Lista de Contatos -->

    <ul>
        <?php if (!empty($contatos)): foreach ($contatos as $indice => $contato): ?>
            <li id="<?= $indice ?>">
                <strong>Nome:</strong> <?= htmlspecialchars($contato->getNome()) ?> <br>
                <strong>Email:</strong> <?= htmlspecialchars($contato->getEmail()) ?> <br>
                <strong>Telefone:</strong> <?= htmlspecialchars($contato->getTelefone()) ?> <br>
                <form method="POST" action="" style="display:inline;">
                    <button type="submit" name="deletar" value="<?= $indice ?>">Excluir</button>
                    <button type="button" class="editar" name="editar" data-nome="<?= $contato->getNome()?>" data-email="<?= $contato->getEmail() ?>" data-telefone="<?= $contato->getTelefone() ?>" value="<?= $indice ?>">Editar</button>
                    
                </form>
            </li>
        <?php endforeach; else: ?>
            <li>Nenhum cadastro encontrado</li>
        <?php endif; ?>
    </ul>

    <p>Contatos cadastrados: <?= $gerenciadorDeContatos->contarContatos() ?></p>
</body>
</html>

<script>
    var btnSalvar = document.getElementById("add")
    var btnsEditar = document.querySelectorAll(".editar");
    var btnCancelar = document.getElementById("cancel");
    var itens = document.querySelectorAll("li");

    btnsEditar.forEach(btnEditar => 
    {
        btnEditar.addEventListener("click", function() 
        {
            btnSalvar.textContent = "Salvar Mudanças";
            btnSalvar.setAttribute("name", "salvar");
            btnCancelar.style.display = "inline";

            document.getElementById("nome").value = btnEditar.dataset.nome;
            document.getElementById("email").value = btnEditar.dataset.email;
            document.getElementById("telefone").value = btnEditar.dataset.telefone;

            var indice = this.value;
            document.getElementById("indice").value = indice;
            itens.forEach(item => 
            {
                if(item.getAttribute("id") == indice)
                    item.style.display = "block";
                else
                    item.style.display = "none";                
            });
        });
    });


    btnCancelar.addEventListener("click", function() 
    {
        document.getElementById("nome").value = "";
        document.getElementById("email").value = "";
        document.getElementById("telefone").value = "";
        document.getElementById("indice").value = "";
        btnSalvar.textContent = "Adicionar Contato";
        btnSalvar.setAttribute("name", "add");

        itens.forEach(item => {
            item.style.display = "block";                
        });
        btnCancelar.style.display = "none";
    });
</script>