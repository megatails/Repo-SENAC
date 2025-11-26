<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" />
    <title>Exercício Polígono</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
</head>
<body>
    <div class="container">
    <header>
        <h1>Exercício 2</h1>
    </header>

<?php
// Se não tivermos qnt definido (primeiro acesso ou esqueceu de preencher), mostra o primeiro form:
if ($qnt === null || $qnt === 0) :
?>
    <form action="" method="POST">
        <label for="qnt">Insira o número de <strong>lados</strong> do objeto:</label>
        <input type="number" name="qnt" id="qnt" min="1" required>
        <input class="arco-iris" type="submit" value="Próximo">
    </form>

<?php
// Se já temos qnt (veio via POST), mostra o form para os lados correspondentes
else:
    // limite prático: trabalhar com 3..8 lados por exemplo
    if ($qnt < 3) {
        echo "<h2 class='resposta erro'>Você não tem um polígono (mínimo 3 lados).</h2>";
        echo '<p><a href="">Voltar</a></p>';
    } else if ($qnt == 3) {
        // Form para triângulo: 3 inputs
        ?>
        <h2 class="resposta">Triângulo — insira os comprimentos dos 3 lados:</h2>

        <form action="" method="POST">
            <!-- preserva qnt para o próximo POST -->
            <input type="hidden" name="qnt" value="3">
            <label for="a">Primeiro lado:</label>
            <input type="number" name="a" id="a" min="0.0001" step="any" required>

            <label for="b">Segundo lado:</label>
            <input type="number" name="b" id="b" min="0.0001" step="any" required>

            <label for="c">Terceiro lado:</label>
            <input type="number" name="c" id="c" min="0.0001" step="any" required>

            <input class="arco-iris" type="submit" value="Calcular">
        </form>
        <?php

        // Se os lados já foram submetidos, processa
        if (isset($_POST['a'], $_POST['b'], $_POST['c'])) {
            $a = floatval($_POST['a']);
            $b = floatval($_POST['b']);
            $c = floatval($_POST['c']);

            // Validação básica: os lados devem satisfazer a desigualdade triangular
            if ($a + $b <= $c || $a + $c <= $b || $b + $c <= $a) {
                echo "<h3 class='resposta erro'>Esses valores não formam um triângulo (falha na desigualdade triangular).</h3>";
            } else {
                // Tipo do triângulo
                if (abs($a - $b) < 1e-9 && abs($b - $c) < 1e-9) {
                    $tipo = "Equilátero";
                } elseif (abs($a - $b) < 1e-9 || abs($a - $c) < 1e-9 || abs($b - $c) < 1e-9) {
                    $tipo = "Isósceles";
                } else {
                    $tipo = "Escaleno";
                }

                // Área:
                // - Equilátero: (lado^2 * sqrt(3)) / 4
                if ($tipo === "Equilátero") {
                    $area = ($a * $a * sqrt(3)) / 4;
                }
                // - Isósceles (dois lados iguais): base = lado diferente; altura = sqrt(lado^2 - (base^2/4))
                elseif ($tipo === "Isósceles") {
                    // identifica quais são os lados iguais
                    if (abs($a - $b) < 1e-9) { $lado_igual = $a; $base = $c; }
                    elseif (abs($a - $c) < 1e-9) { $lado_igual = $a; $base = $b; }
                    else { $lado_igual = $b; $base = $a; }

                    $altura = sqrt(max(0, $lado_igual*$lado_igual - ($base*$base)/4));
                    $area = ($base * $altura) / 2;
                }
                // - Escaleno: usar fórmula de Heron
                else {
                    $s = ($a + $b + $c) / 2;
                    $area = sqrt(max(0, $s * ($s - $a) * ($s - $b) * ($s - $c)));
                }

                echo "<h3 class='resposta'>Tipo do triângulo: <strong>$tipo</strong><br>Área: <strong>" . round($area, 6) . "</strong></h3>";
                echo '<p><a href="">Refazer</a></p>';
            }
        }
    } elseif ($qnt == 4) {
        // Para simplificar: solicitar 4 lados; se todos iguais -> quadrado (área = lado^2), senão informar não suportado ainda.
        ?>
        <h2 class="resposta">Quadrilátero - insira 4 lados (para cálculo simples, se todos iguais assumimos quadrado)</h2>
        <form action="" method="POST">
            <input type="hidden" name="qnt" value="4">
            <label for="n1">Lado 1:</label><input type="number" name="n1" id="n1" step="any" required>
            <label for="n2">Lado 2:</label><input type="number" name="n2" id="n2" step="any" required>
            <label for="n3">Lado 3:</label><input type="number" name="n3" id="n3" step="any" required>
            <label for="n4">Lado 4:</label><input type="number" name="n4" id="n4" step="any" required>
            <input class="arco-iris" type="submit" value="Calcular">
        </form>
        <?php
        if (isset($_POST['n1'], $_POST['n2'], $_POST['n3'], $_POST['n4'])) {
            $n1 = floatval($_POST['n1']);
            $n2 = floatval($_POST['n2']);
            $n3 = floatval($_POST['n3']);
            $n4 = floatval($_POST['n4']);
            if (abs($n1 - $n2) < 1e-9 && abs($n2 - $n3) < 1e-9 && abs($n3 - $n4) < 1e-9) {
                $area = $n1 * $n1;
                echo "<h3 class='resposta'>Quadrado detectado. Área = " . round($area,6) . "</h3>";
            } else {
                echo "<h3 class='resposta'>Quadrilátero não regular — cálculo não implementado (ex.: precisa de diagonais/ângulos).</h3>";
            }
            echo '<p><a href="">Refazer</a></p>';
        }
    } elseif ($qnt == 5) {
        // Para pentágono regular (todos lados iguais) podemos usar fórmula: área = (5 * s^2) / (4 * tan(pi/5))
        ?>
        <h2 class="resposta">Pentágono - insira 5 lados (se todos iguais será considerado pentágono regular)</h2>
        <form action="" method="POST">
            <input type="hidden" name="qnt" value="5">
            <?php for ($i=1;$i<=5;$i++): ?>
                <label for="m<?=$i?>">Lado <?=$i?>:</label>
                <input type="number" name="m<?=$i?>" id="m<?=$i?>" step="any" required>
            <?php endfor; ?>
            <input class="arco-iris" type="submit" value="Calcular">
        </form>
        <?php
        if (isset($_POST['m1'],$_POST['m2'],$_POST['m3'],$_POST['m4'],$_POST['m5'])) {
            $vals = array_map('floatval', [$_POST['m1'],$_POST['m2'],$_POST['m3'],$_POST['m4'],$_POST['m5']]);
            $allEqual = true;
            foreach ($vals as $v) if (abs($v - $vals[0]) > 1e-9) { $allEqual = false; break; }
            if ($allEqual) {
                $s = $vals[0];
                $area = (5 * $s * $s) / (4 * tan(pi()/5));
                echo "<h3 class='resposta'>Pentágono regular. Área ≈ " . round($area,6) . "</h3>";
            } else {
                echo "<h3 class='resposta'>Pentágono não regular — cálculo não implementado.</h3>";
            }
            echo '<p><a href="">Refazer</a></p>';
        }
    } else {
        echo "<h2 class='resposta'>Ainda não implementado para {$qnt} lados. Tente 3, 4 ou 5.</h2>";
        echo '<p><a href="">Voltar</a></p>';
    }
endif; // fim qnt handling
?>

    <footer>
        <div class="credits">Developed by Rodrigo L. Cassilhas</div>
    </footer>
    </div>
</body>
</html>
