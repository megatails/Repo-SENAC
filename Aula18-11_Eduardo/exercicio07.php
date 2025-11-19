<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Exercicio 1</title>
</head>
    <header>
        <h1>Exercicio 1</h1>
    </header>
    <body>
        <form action="" method="POST">
            <label for="num1">Insira o valor do seu <span style="color: dodgerblue;">Salário</span></label>
            <input type="number" name="num1" id="num1" required>



            <input class="arco-iris" type="submit" value="Calcular?">
        </form>
    </body>
</html>

<?php
    $var1 = $_POST["num1"];
    $desc = $var1*0.275;
    $result = $var1 - $desc;

    if ($var1 != null && $var1 != 0) 
    {
        if ($var1 <= 2000) 
        {
            echo "<h1 class='resposta'>Seu salário continua: " . "<span class='arco-iris'>$var1</span>" ."<br>Você está isento de qualquer juros!</h1>";
        }

        else 
        {
            echo "<h1 class='resposta'>Seu salário pós imposto ficou: " . "<span class='arco-iris'> R$$var1 Reais</span><br>" . "<br>Aqui está o valor descontado: " . "<span class='arco-iris'> R$$desc Reais</span>" . "</h1>";
        }
    }
?>

<html>
    <body>
        <div class="credits">Developed by Rodrigo L. Cassilhas</div>
    </body>
</html>