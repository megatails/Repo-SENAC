<?php 
    function calcAge($birth) {
        $date = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
        $date = $date->format("Y");
        $age = $date - $birth;

        return $age;
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<style>html {color-scheme: dark;}</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
    <form method="POST">
        <label for="date">Digite a sua Data de Nascimento:</label>
        <input name="date" type="date"><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php  
    $date = $_POST['date'];
       echo "Você tem <span style='color: dodgerblue'>";
       echo calcAge($date);
       echo "</span> anos.";

?>