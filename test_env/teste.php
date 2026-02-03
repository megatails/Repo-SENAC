<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $abc = $_POST["abc"];
    $def = $_POST['def'];
    
    echo 'abc = ' . $abc . '<br> def = ' . $def;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>