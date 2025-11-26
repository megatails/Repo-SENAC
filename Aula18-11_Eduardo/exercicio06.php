<?php 
    $condenado = 0;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Exercicio 6</title>
</head>
    <header>
        <h1>Exercicio 6</h1>
    </header>
    <body>
        <form action="" method="POST">
            <label for="perg1">Telefonou para a <span style="color: dodgerblue;">vítima?</span></label>
            <div class="radio">
                <input type="radio" name="perg1" id="perg1" value="1" required><h1>Sim</h1>
                <input type="radio" name="perg1" id="perg1" value="0" required><h1>Não</h1>
            </div>

            <label for="perg2">Esteve no local do <span style="color: Crimson;">Crime?</span></label>
            <div class="radio">
                <input type="radio" name="perg2" id="perg2" value="1" required><h1>Sim</h1>
                <input type="radio" name="perg2" id="perg2" value="0" required><h1>Não</h1>
            </div>

            <label for="perg3">Mora perto da <span style="color: dodgerblue;">vítima?</span></label>
            <div class="radio">
                <input type="radio" name="perg3" id="perg3" value="1" required><h1>Sim</h1>
                <input type="radio" name="perg3" id="perg3" value="0" required><h1>Não</h1>
            </div>

            <label for="perg4">Devia para a <span style="color: dodgerblue;">vítima?</span></label>
            <div class="radio">
                <input type="radio" name="perg4" id="perg4" value="1" required><h1>Sim</h1>
                <input type="radio" name="perg4" id="perg4" value="0" required><h1>Não</h1>
            </div>

            <label for="perg5">Já trabalhou com a <span style="color: dodgerblue;">vítima?</span></label>
            <div class="radio">
                <input type="radio" name="perg5" id="perg5" value="1" required><h1>Sim</h1>
                <input type="radio" name="perg5" id="perg5" value="0" required><h1>Não</h1>
            </div>

            <input class="arco-iris" type="submit" value="Calcular?">
        </form>
    </body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $perg1 = (int)$_POST["perg1"];
    $perg2 = (int)$_POST["perg2"];
    $perg3 = (int)$_POST["perg3"];
    $perg4 = (int)$_POST["perg4"];
    $perg5 = (int)$_POST["perg5"];

    $condenado = $perg1 + $perg2 + $perg3 + $perg4 + $perg5;
    if ($condenado <= 1) {
        echo "<h1 class='resposta'>Você é <span style='color: green'>Inocente</span></h1>";
    }
        else if ($condenado == 2) {
            echo "<h1 class='resposta'>Você é <span style='color: crimson'>SUS</span></h1>";
    }
        else if ($condenado >= 3 && $condenado <= 4) {
            echo "<h1 class='resposta'>Você é <span style='color: hotpink'>Cúmplice</span></h1>";
    }
        else if ($condenado >= 5) {
            echo "<h1 class='resposta'>Você é o <span class='arco-iris'>AMOGUS!!!!</span></h1>";
    }
}
?>

<html>
    <body>
        <div class="credits">Developed by Rodrigo L. Cassilhas</div>
    </body>
</html>