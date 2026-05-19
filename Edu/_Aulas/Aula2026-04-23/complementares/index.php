<?php 
    function entrada($nome) {
        return "<h1>Saudações, $nome!<br>Esses são os Exercicios Complementares</h1>";
    }

    function displayEx($num){
        echo "<h2 style='color: lightblue'>Exercício $num</h2>";
    }

    function divisivelPor($valor){
        displayEx(1);
        echo "<h3>O Valor <span style='font-weight: bold; color: dodgerblue;'>$valor</span>:</h3>";
        if($valor % 2 == 0){
            echo "<p style='color: lightgreen;'>> é divisível por 2 <</p>";
        } else {
            echo "<p style='color: crimson;'>> não é divisível por 2 <</p>";
        }

        if($valor % 5 == 0){
            echo "<p style='color: lightgreen;'>> é divisível por 5 <</p>";
        } else {
            echo "<p style='color: crimson;'>> não é divisível por 5 <</p>";
        }

        if($valor % 10 == 0){
            echo "<p style='color: lightgreen;'>> é divisível por 10 <</p>";
        } else {
            echo "<p style='color: crimson;'>> não é divisível por 10 <</p>";
        }
    }

    function classTriagulo($a, $b, $c){
        displayEx(2);
        if($a == $b && $b == $c){
            echo "<p>Os lados são iguais, portanto: <span style='color: lightgreen;'>> é um triângulo equilátero <</p>";
        } else if($a == $b || $a == $c || $b == $c){
            echo "<p>Dois lados são iguais e um é diferente, portanto: <span style='color: lightgreen;'>> é um triângulo isósceles <</p>";
        } else {
            echo "<p>Todos os lados são diferentes, portanto: <span style='color: lightgreen;'>> é um triângulo escaleno<</p>";
        }
    }

    function calcMassa($massa){
        displayEx(3);
        $tempo = 0;
        
        while($massa >= 0.10){
            $massa = $massa * 0.75;
            $tempo += 30;
        }
        echo "<p>Tempo necessário para que a massa seja menor que 0.10: <span style='color: dodgerblue;'>$tempo segundos</span>
        <br>Massa final: <span style='color: dodgerblue;'>$massa</span></p>";
    }

    function calcularIMC($peso, $altura){
        displayEx(4);
        $imc = $peso / ($altura * $altura);
        echo "<p>O IMC calculado é: <span style='color: dodgerblue;'>" . number_format($imc, 2) . "</span></p>";
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Complementar</title>
</head>
<body>
    <div class="container"
    <?= entrada("Rodrigo") ?>
        <form action="" method="POST">
            <label for="var1">Digite o 1º valor:</label>
            <input type="number" name="var1" id="var1" value=0 required><br>
            <label for="var2">Digite o 2º valor:</label>
            <input type="number" name="var2" id="var2" value=0 required><br>
            <label for="var3">Digite o 3º valor:</label>
            <input type="number" name="var3" id="var3" value=0 required><br>
            <button type="submit">Verificar</button><br>
        </form>
</body>
</html>

<?php
    $var1 = $_POST['var1'];
    $var2 = $_POST['var2'];
    $var3 = $_POST['var3'];

    divisivelPor($var1);
    classTriagulo($var1, $var2, $var3);
    calcMassa($var1);
    calcularIMC(80, 1.80);
?>

</div>