<?php
    $contador = 0;
    $produto = 4;


    while ($contador <= 10) {
        $tabuada = $produto * $contador;    
        $contador++;
        echo "Tabuada do $produto: " . "4x$contador = " . $tabuada . "<br>";
    }
?>