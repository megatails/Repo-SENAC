<?php 
    session_start();
    $_SESSION['opcao']=4;

    header("Location: ex01-menu.php");
    die();
?>