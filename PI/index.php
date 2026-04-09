<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Fisio com a Ana</title>
</head>
  <?php 
    include 'header.php';
  ?>

<body>
  <div class="centro fundo">
    <div class="textinho">
      olá
    </div>
  </div>
</body>
</html>

<?php 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $_SESSION['entryEmail'] = $_POST['entryEmail'];
    header('Location: login.php'); 
    exit();
}

?>