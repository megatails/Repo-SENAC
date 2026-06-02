<?php 
    session_start();
    $loginChk = $_SESSION['usuario'];
?>

<link rel="stylesheet" href="styles/style.css">
<style>html {color-scheme: dark;}</style>
<div class="lateral"> 
    <div class="lateral-texto"></div>
    <h2>&nbsp;&nbsp;Biblioteca</h2>
        <a class='msg' href="/projeto-biblioteca/painel.php">&nbsp;&nbsp;Início</a>

        <div class="msg-dropdown">
            <a class='msg' href="#">&nbsp;&nbsp;Livros</a>
            <div class='msg-submenu'>
                <a href="/projeto-biblioteca/livros/cadastrar.php">&nbsp;&nbsp;Cadastrar Livro</a>
                <a href="/projeto-biblioteca/livros/listar.php">&nbsp;&nbsp;Listar Livros</a>
            </div>
        </div>

        <div class="msg-dropdown">
            <a class='msg' href="#">&nbsp;&nbsp;Usuários</a>
            <div class='msg-submenu'>
                <a href="/projeto-biblioteca/users/cadastrar.php">&nbsp;&nbsp;Cadastrar Usuário</a>
                <a href="/projeto-biblioteca/users/listar.php">&nbsp;&nbsp;Listar Usuários</a>
            </div>
        </div>
        
        <a class='msg msg-fixed' style="cursor: default;">&nbsp;&nbsp;Bem vindo!<br>&nbsp; <?php echo $loginChk ?> </a>
</div>

