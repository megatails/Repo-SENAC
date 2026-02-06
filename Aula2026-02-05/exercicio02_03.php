<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio</title>
</head>

<header>
  <div class="backdrop"></div>
  <div class="backdrop-edge"></div>
</header>

<body>
    <form class='' method="post">
        <label for="num">Insira o <span style="color: dodgerblue;"> número </span>e veja quantos números existem até chegar nele: </label>
            <input type="number" name="num" id="num" required>

            <input class="arco-iris" type="submit" value="Veja a resposta">
    </form>

</body>


</html>

<?php   
    if ($_SERVER["REQUEST_METHOD"] == "POST") { //executa após dar submit em um form com method='post'

        $contador = 1;
        $var = $_POST["num"];

        if ($var != null) {
            do{
                $contador++;
                echo "<h1 class='resposta'>Seu número: " . '<span style="color: crimson">'.$contador-1 .'</span>' . " |  Números até <span style='color: dodgerblue;'>$var</span>: (<span style='color: lightgreen;'>" . ($var - $contador+1) . "</span>)<br></h1>";
            }
            while ($contador <= $var);
        }

    }
?>