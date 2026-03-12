<?php 
    session_start();
    $_SESSION['opcao']=2;

    header("Location: ex01-menu.php");
    die();
?>