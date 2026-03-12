<?php 
    session_start();
    $_SESSION['opcao']=1;

    header("Location: ex01-menu.php");
    die();
?>