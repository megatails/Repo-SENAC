<?php
session_start();
$qnt = $_POST["qnt"] ?? null;
if (isset($_POST['reset'])) {
    $qnt = null;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Exercicio 2</title>
</head>
    <header>
        <h1>Exercicio 2</h1>
    </header>
    <body>
        <form action="" method="POST">
            <?php if ($qnt == 0 || $qnt == null || $qnt =="") { ?>
            <label for="qnt">Insira o número de <span style="color: dodgerblue;"> lados</span> do objeto: </label>
            <input type="number" name="qnt" id="qnt" required>
            <input class="arco-iris" type="submit" value="Proximo">
            <?php } ?>
            

             <?php if ($qnt != 0 && $qnt != null && $qnt != "") { ?>
                <input type="hidden" name="qnt" id="qnt" value="<?php echo $qnt; ?>">
                <?php
                if ($qnt <3) 
                {
                    echo "<h1 class='resposta'>Você não tem um <span style='color: orange;'>poligono!</span></h1><br><button class='arco-iris' name='reset' value='1'>Voltar</button>";
                    $qnt = 0;
                }

                else if ($qnt == 3) { ?> <!-- Triangulo (equilatero, isosceles, escaleno) -->

                <h1 class='respostaSM' >Você tem um <span style='color: palegoldenrod'>Triangulo!</span><br>Digite o valor dos lados!</h1>
                <label for='num1'>Insira o <span style='color: crimson;'> Primeiro</span> número: </label>
                <input type='number' name='num1' id='num1' required><br>

                <label for='num2'>Insira o <span style='color: forestgreen;'> Segundo</span> número: </label>
                <input type='number' name='num2' id='num2' required><br>

                <label for='num3'>Insira o <span style='color: dodgerblue;'> Terceiro</span> número: </label>
                <input type='number' name='num3' id='num3' required><br>

                <input class='arco-iris' type='submit' value='Calcular'>

             <?php } else if ($qnt == 4) { ?> <!-- Quadrado -->

                <h1 class='resposta'>Você tem um <span style='color: lightgreen'>Quadrado!</span></h1>
                <label for='num1'>Insira o valor dos<span style='color: crimson;'> lados</span>: </label>
                <input type='number' name='num1' id='num1' required><br>

                <input class='arco-iris' type='submit' value='Calcular'>

             <?php } else if ($qnt == 5) {?> <!-- Pentagono -->

                <h1 class='resposta'>Você tem um <span style='color: hotpink'>Pentagono!</span>
                <br>Digite o valor dos lados!</h1>
                <label for='num1'>Insira o <span style='color: crimson;'> Primeiro</span> número: </label>
                <input type='number' name='num1' id='num1' required><br>

                <label for='num2'>Insira o <span style='color: forestgreen;'> Segundo</span> número: </label>
                <input type='number' name='num2' id='num2' required><br>

                <label for='num3'>Insira o <span style='color: dodgerblue;'> Terceiro</span> número: </label>
                <input type='number' name='num3' id='num3' required><br>

                <label for='num4'>Insira o <span style='color: hotpink;'> Quarto</span> número: </label>
                <input type='number' name='num4' id='num4' required><br>

                <label for='num5'>Insira o <span style='color: mediumpurple;'> Quinto</span> número: </label>
                <input type='number' name='num5' id='num5' required><br>

                <input class='arco-iris' type='submit' value='Calcular'>

            <?php } 
            else {
                echo "<h1 class='resposta'>Poligono não identificado!</h1><br><button class='arco-iris' name='reset' value='1'>Voltar</button>"; //arrumar class do botao
                $qnt = 0;
                } 
            }?>
        </form>
    </body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $qnt = $_POST["qnt"];

    $var1 = $_POST["num1"];
    $var2 = $_POST["num2"];
    $var3 = $_POST["num3"];
    $var4 = $_POST["num4"];
    $var5 = $_POST["num5"];

    $tri_Equi = ((pow($var1,2) * sqrt(3)) / 4);
    
    if ($qnt == 3) {
        if ($var1 == $var2 || $var1 == $var3 || $var2 == $var3) {

            if ($var1 != $var2 || $var1 != $var3) {
            $a = $var1;
            }

            if ($a == $var2) {
                $b = $var3;
            } else {
                $b = $var2;
            }

            $c = (pow($a, exponent: 2) + pow($b, 2));
            $altura = sqrt($c);
            $tri_Iso = (($a * $altura) / 2);
        }
    }
    
    // $tri_Esc = () ;
    if ($var1 != 0 && $var1 != null && $var1 != "") {
        if ($qnt == 3) {
            if ($var1 == $var2 && $var2 == $var3) {
                echo "<h1 class='resposta'>O Triângulo é <span style:'color: lightpink'> Equilátero</span><br>O valor da área é: " . $tri_Equi . "</h1>"; 
            } else if (($var1 == $var2 || $var1 == $var3 || $var2 == $var3) && ($var1 != $var3 || $var1 != $var2 || $var2 != $var3)) {
                echo "<h1 class='resposta'>O Triângulo é <span style:'color: lightgreen'> Isósceles</span><br>O valor da área é: " . $tri_Iso . "</h1>"; 
            }   else {
                echo "<h1 class='resposta'>O Triângulo é <span style:'color: lightblue'> Escaleno!</span><br>O valor da área é: " . $tri_Esc . "</h1>"; 
            }
        }

        else if ($qnt == 4) {
            echo "<h1 class='resposta'>É um Quadrado! O valor da área é: " . $var1 * $var1 . "</h1>";
        }

        else if ($qnt == 5) {
            if ($var1 == $var2 && $var2 == $var3 && $var3 == $var4 && $var4 == $var5) {
            $s = $var1;
            $area = (5 * $s * $s) / (4 * tan(pi() / 5));
            echo "<h1 class='resposta'>É um Pentagono! O valor da área é: " . $area . "</h1>";
            }
            else {
                echo "<h1 class='resposta'>Não é possível calcular a área</h1>";
            }
        }

        else {
            echo "<h1 class='resposta'>Aguardando Valores...!</h1>";
        }
    }
}
?>

<html>
    <body>
        <div class="credits">Developed by Rodrigo L. Cassilhas</div>
    </body>
</html>