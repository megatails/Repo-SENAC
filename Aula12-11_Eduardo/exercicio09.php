<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Exercicio 9</title>
</head>
    <header>
        <h1>Exercicio 9</h1>
    </header>
    <body>
        <form action="" method="POST">
            <label for="choice">Que <span class="arco-iris">tipo</span> de viagem pretende fazer hoje? </label>
            <select class="botao" name="choice" id="choice">
            <option value="">Selecione sua resposta...</option>
            <option value="curta">Curta</option>
            <option value="longa">Longa</option>
            </select>

            <label for="num1">O quão longe está o destino da <span class="arco-iris">viagem?</span></label>
            <input type="number" name="num1" id="num1" required>


            <input class="botao" type="submit" value="Descubra quanto custará">
        </form>
    </body>
</html>

<?php
    $var1 = $_POST["num1"];
    $choice = $_POST["choice"];

    $curta = $var1*0.50;
    $longa = $var1*0.35;
    


    if ($choice != "") {
        if ($var1 != null) {
            if ($choice == "curta") {
                echo "<h1 class='resposta'>O valor da viagem ficou: <span class='arco-iris'>" . $curta . "</span> Reais</h1>";
            }
            elseif ($choice == "longa") {
                echo "<h1 class='resposta'>O valor da viagem ficou: <span class='arco-iris'>". $longa . "</span> Reais</h1>";
            }

        }
    }
    else {
            echo "<h1 class='resposta' style='color: crimson'>ESCOLHA O TIPO DE VIAGEM!</h1>";
        }
?>

<html>
    <body>
        <div class="credits">Developed by Rodrigo L. Cassilhas</div>
    </body>
</html>