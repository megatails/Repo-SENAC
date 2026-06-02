<?php 
    session_start();
    $loginChk = $_SESSION['usuario'];
?>

<link rel="stylesheet" href="style.css">
<style>html {color-scheme: dark;}</style>
<div class="lateral"> 
    <div class="lateral-texto"></div>
    <h2>&nbsp;&nbsp;Biblioteca</h2>
        <a class='msg' href="/projeto-biblioteca/painel.php">&nbsp;&nbsp;Início</a>
        <a class='msg' href="/projeto-biblioteca/livros/cadastrar.php">&nbsp;&nbsp;Cadastrar Livro</a>
        <a class='msg' href="/projeto-biblioteca/livros/listar.php">&nbsp;&nbsp;Listar Livros</a>

        <div class="dropdown">
            <a class='msg'>Usuarios</a>
                <div class='msg-dropdown'>
                    <a  href="/projeto-biblioteca/users/cadastrar.php">&nbsp;&nbsp;Cadastrar Usuario</a>
                    <a  href="/projeto-biblioteca/users/listar.php">&nbsp;&nbsp;Listar Usuarios</a>
                </div>
        </div>
        
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <a class='msg' style="cursor: default;">&nbsp;&nbsp;Bem vindo!<br>&nbsp; <?php echo $loginChk ?> </a>
</div>

