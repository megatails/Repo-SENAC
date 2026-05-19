<?php
    $myDate = "2026-04-30";
    $formattedDate = date("d/m/Y", strtotime($myDate));
    $date = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
    echo "Data atual: " . $date->format("Y-m-d")."<br>";
    echo "Hora atual: " . $date->format("H:i:s")."<br>";

    echo "Data formatada: " . $formattedDate;

    $newDate = date("Y-m-d", strtotime($myDate . " +7 day"));
    echo "<br>Data com 7 dias adicionados: " . $newDate;
?>