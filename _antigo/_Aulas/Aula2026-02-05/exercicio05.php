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
        <label for="num">Insira o <span style="color: dodgerblue;"> número: </span></label>
            <input type="number" name="num" id="num" required>

            <input class="arco-iris" type="submit" value="Veja a resposta">
    </form>

</body>


</html>

<?php   
    $fib1 = 0;
    $fib2 = 1;
    if ($_SERVER["REQUEST_METHOD"] == "POST") { //executa após dar submit em um form com method='post'

        $contador = 0;
        $var = $_POST["num"];


        if ($var != null) {
            do{
                if ($contador == 0) {
                    $condicao = $fib1;
                }
                elseif($contador == 1) {
                    $condicao = $fib2;
                }
                else{
                $condicao = $fib1 + $fib2;
                $fib1 = $fib2;
                $fib2 = $condicao;
                }

                $contador++;
                echo "<h1 class='resposta'>". $fib1 . "<br></h1>";
            }
            while ($contador < $var);
        }

    }
?>