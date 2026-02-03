<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="teste.php"  method="post">
        <label for="abc">abc</label>
        <input type="text" name="abc" id="abc" placeholder="abc...">

        <button type="submit" value="abc">Confirmar abc</button>
    </form>
    <br><br><br>
    <form  method="post">
        <label for="def">def</label>
        <input type="text" name="def" id="def" placeholder="def">

        <button type="submit" value="def">Confirmar def</button>
    </form>
</body>
</html>

<?php   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        header('Location: teste.php'); 
    }

?>