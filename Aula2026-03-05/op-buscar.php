<?php 
    session_start();
    $_SESSION['opcao']=3;

    header("Location: ex01-menu.php");
    die();
?>