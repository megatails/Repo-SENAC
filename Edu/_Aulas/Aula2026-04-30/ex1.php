<?php 
    function convertTimeZone($date, $time, $newTimezone) {
        $dateTime = new DateTime("$date $time", new DateTimeZone("America/Sao_Paulo"));
        $dateTime->setTimezone(new DateTimeZone($newTimezone));

        return $dateTime->format('d/m/Y - H:i:s');
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<style>html {color-scheme: dark;}</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <form method="POST">
        <label for="date">Digite a Data:</label>
        <input name="date" type="date"><br><br>
        <label for="time">Digite a Hora:</label>
        <input name="time" type="time"><br><br>
        <label for="pais">Selecione o País:</label>
        <select name="pais" id="pais">
            <option value="">Selecione...</option>
            <option value="America/Sao_Paulo">America</option>
            <option value="Asia/Tokyo">Asia</option>
            <option value="Europe/London">Europe</option>
            <option value="Pacific/Auckland">Pacific</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php  
    $date = $_POST['date'] ?? null;
    $time = $_POST['time'] ?? null;
    $pais = $_POST['pais'] ?? null;

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(!$date || !$time || !$pais) {
            echo "<h3>Por favor, preencha todos os campos.</h3>";
            exit;
        } else {
            $convertedDateTime = convertTimeZone($date, $time, $pais);
            $formattedDate = date("d/m/Y", strtotime($convertedDateTime));
            echo "<h3>Data e Hora Convertidas: <span style='color: dodgerblue;'>$convertedDateTime</span></h3>";
        }
    }
    


?>