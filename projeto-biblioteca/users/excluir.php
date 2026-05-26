<?php
    require "../DB/conexao.php";
    $id=$GET['id'];
    try{
        $sql = "DELETE FROM usuarios WHERE id = id";
        $smtp = $pdo->prepare($sql);
        $smtp->execute([':id=>$id']);
        header("Location: listar.php");
    }
    catch (PDOException $e) {
        echo "Erro: ".$e->getMessage();
    }
    
?>