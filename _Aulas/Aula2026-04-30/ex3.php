<?php 
    function timeWorked($start, $end) {
        $date = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
        $date = $date->format("Y-m-d H:i:s");
        $timeSpent = $end - $start;

        return $timeSpent;
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<style>html {color-scheme: dark;}</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
    <form method="POST">
        <label for="start">Digite a sua Data de Admissão:</label>
        <input name="start" type="datetime-local"><br><br>

        <label for="end">Digite a sua Data de Demissão:</label>
        <input name="end" type="datetime-local"><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php  
    $start = $_POST['start'];
    $end = $_POST['end'];
       echo "Você trabalhou por: <span style='color: dodgerblue'>";
       echo timeWorked($start, $end);
       echo " Anos</span>";

?>