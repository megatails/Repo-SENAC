<?php
    echo "<h1>Calculos Matematicos</h1>";

    $base = 5;
    $expoente = 3;
    $num = 45;
    $negativo = -8.4;

    //função ABS - Retorna o valor absoluto
    echo "abs($negativo) = " . abs($negativo) . "<br><br>";
    //potencia
    echo "pow($base,$expoente) = " .pow($base,$expoente)."<br><br>";
    //raiz quadrada
    echo "SQRT (81) = " .sqrt(81). "<br><br>";
    //funções de arrendondamento
    echo "<h3>Arredondamento</h3>";
    echo "ceil($num)= ".ceil($num). "(para cima)<br>";
    echo "floor($num)= ".floor($num). "(para baixo)<br>";
    echo "round($num) = ". round($num). "(mais proximo)<br>";
    //função numero aleatorio
    echo"rand(1,100)= " . rand(1,100). "<br>";


?>