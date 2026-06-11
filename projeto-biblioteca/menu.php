<?php 
    session_start();
    $loginChk = $_SESSION['usuario'];
    $mode = "1";
    // $tema = $mode == true  ? "light" : "dark";

?>

<link rel="stylesheet" href="/projeto-biblioteca/styles/light.css" id="linkCSS">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>html {color-scheme: <?=$tema?>;}</style>

<input type="hidden" id="mode" value="<?=$mode?>">
<div class="lateral"> 
    <div class="lateral-texto"></div>
    <div style="display: flex; align-items: center; justify-content: space-between;">
        <h2>&nbsp;&nbsp;Biblioteca</h2>
        <button class="tema" type="button" id="btnMudaEstilo"><i id="icoEstilo" class="fa fa-moon-o"></i></button>
    </div>
        
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

        <div class="msg-dropdown">
            <a class="msg" href="#">&nbsp;&nbsp;Alugueis</a>
            <div class="msg-submenu">
                <a href="/projeto-biblioteca/alugueis/cadastrar.php">Alugar Livro</a>
                <a href="/projeto-biblioteca/alugueis/listar.php">Listar Aluguéis</a>
            </div>

        </div>
        
        <a class='msg msg-fixed' style="cursor: default;">&nbsp;&nbsp;Bem vindo!<br>&nbsp; <?php echo $loginChk ?> </a>
</div>

<script>
    document.getElementById("btnMudaEstilo").style.color = "var(--text)";
    var mode = document.getElementById("mode");
    document.getElementById("btnMudaEstilo").addEventListener("click", function()
    {
        if(mode.value == "1")
        {
            mudarTema("dark", "sun", "0");
        }
        else {
            mudarTema("light", "moon", "1");
        }
    });

    function mudarTema(tema, icone, modo){
        document.documentElement.style.colorScheme = tema;
        document.getElementById("linkCSS").setAttribute("href", `/projeto-biblioteca/styles/${tema}.css`);
        document.getElementById("icoEstilo").setAttribute("class", `fa fa-${icone}-o`);
        mode.value = modo;
    }
</script>
