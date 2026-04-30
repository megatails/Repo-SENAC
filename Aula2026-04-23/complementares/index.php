<?php
    function entrada($nome){
        echo "<h3>Saudações " . $nome . "<br>Esses são os Exercicios Complementares!</h3><br><br>";
    }

    function displayEx($num){
        echo "<h3 style='color: lightgreen'>Exercicio $num</h3>";
    }

    function divisivelPor($var1){
        displayEx(1);
        echo "<h4>". "O número " . "<span style='color: dodgerblue'>$var1:</span></h4>";
        if ($var1 % 2== 0) {
            echo "é<span style='color: crimson'> > Divisível por 2 < </span></h4>";
        } else {
            echo "<span style='color: crimson'> > Não é divisível por 2 < </span></h4>";
        }

        if ($var1 % 5== 0) {
            echo "é<span style='color: crimson'> > Divisível por 5 < </span></h4>";
        } else {
            echo "<span style='color: crimson'> > Não é divisível por 5 < </span></h4>";
        }

        if ($var1 % 10== 0) {
            echo "é<span style='color: crimson'> > Divisível por 10 < </span></h4>";
        } else {
            echo "<span style='color: crimson'> > Não é divisível por 10 < </span></h4>";
        }
    }
    
    function classifTriangulo($a, $b, $c){
        displayEx(2);
        if ($a == $b && $b == $c) {
            echo "<h4>O triângulo é <span style='color: crimson'>Equilátero</span></h4>";
        } elseif ($a == $b || $a == $c || $b == $c) {
            echo "<h4>O triângulo é <span style='color: crimson'>Isósceles</span></h4>";
        } else {
            echo "<h4>O triângulo é <span style='color: crimson'>Escaleno</span></h4>";
        }

        function calcMassa($massa){
            displayEx(3);
            $tempo = 0;

            return $tempo;
        }
        function calcularIMC($peso, $altura){
            displayEx(4);
            $imc = $peso / ($altura * $altura);
            echo "<h4>O peso e a altura são: <span style='color: lightgreen'>" . $peso . "kg</span> e <span style='color: lightgreen'>" . $altura . "m</span><br>";
            echo "O IMC é: <span style='color: lightgreen'>" . number_format($imc, 2) . "</span></h4>";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <div class="container2">
        <?php
            entrada("João");
        ?>
        <form action="" method="post">
            <label for="var1">Digite o 1º número:</label>
            <input type="number" id="var1" name="var1" value=0><br>
            <label for="var2">Digite o 2º número:</label>
            <input type="number" id="var2" name="var2" value=0><br>
            <label for="var3">Digite o 3º número:</label>
            <input type="number" id="var3" name="var3" value=0><br>
            <button type="submit">Verificar</button>
        </form>
    
</body>
</html>

<?php
    if ($_POST) {
        $var1 = $_POST['var1'];
        $var2 = $_POST['var2'];
        $var3 = $_POST['var3'];
        divisivelPor($var1);
        classifTriangulo($var1, $var2, $var3);

        calcularIMC('80', '1.80');
    }
?>

</div>