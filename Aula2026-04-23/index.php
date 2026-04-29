<?php 
    function entrada($nome){
        echo "<h3>Exercicio 1 - Saudação</h3>";
        echo "Saudações " . $nome . "<br>Boas Vindas ao meu site!!!";
    }

    function soma($a, $b){
        
        echo "<h4>o valor da soma é: <span style='color: lightgreen'>" . $a + $b . "</span></h4>";
    }

    function parImpar($a){
        if ($a % 2== 0) {
            echo "<h4>". "O número " . "<span style='color: dodgerblue'>$a</span>" . " é " . "<span style='color: crimson'> > Par < </span></h4>";
        } else {
            echo "<h4>". "O número " . "<span style='color: dodgerblue'>$a</span>" . " é " . "<span style='color: crimson'> > Impar < </span></h4>";
        }
    }

    function maiorNum($a, $b, $c){
    if ($a != $b && $a != $c && $b != $c) {
        if ($a > $b && $b > $c) {
            echo "<h4> <span style='color: crimson'>$a</span> é o maior</h4>";
            } 
            elseif ($a < $b && $c < $b) {
                echo "<h4> <span style='color: lightgreen'>$b</span> é o maior</h4>";
            }
        else  {
            echo "<h4> <span style='color: dodgerblue'>$c</span> é o maior</h4>";
        }
    }
    else {
        echo "<h4 class='resposta'>Há número repetidos! <br> tente números diferentes<h4>";
    }
    }

    function reverseString($string){
        echo 'String Normal: ' . $string. '<br>';
        echo 'String ao contrario: ';
        for ($i=strlen($string)-1; $i >= 0; $i--) { 
             echo $string[$i];            
        }
    }

    function desconto($valor){
        if (!empty($valor)) {
            echo "valor do produto: $valor<br>";
            if ($valor >=500) {
                $valor = $valor * 0.80;
                $desconto = 20;
            } elseif ($valor >= 300) {
                $valor = $valor * 0.85;
                $desconto = 15;
            }
            elseif ($valor >= 100) {
                $valor = $valor * 0.90;
                $desconto = 10;
            }
            else{
                echo 'Sem desconto aplicado!<br>';
            }
            if (!empty($desconto)) echo "Desconto de $desconto% aplicado!";
            echo '<br>Valor Final: ' . $valor;
        }
    }

    function genLogin($nome, $sobrenome){
        echo 'Seu login: '.($nome.'.'.$sobrenome);
    }

    function calcFrete($valor){
        if(!empty($valor)){
            echo "valor do produto: $valor<br>";
            if ($valor > 300) {
                echo "Parabens! Você tem frete gratis!";
            } elseif ($valor <= 100) {
                echo "O valor do frete é de: R$20 Reais.";
            } else {
                echo "O valor do frete é de: R$15 Reais.";
            }
        }
    }

    function checkSenha($string){
        $hasNum = false;
        if(!empty($string)) {
            if (strlen($string) < 8) {
                echo 'Senha muito curta, deve ter no minimo 8 caracteres!';
            }

            for ($i=0; $i < 10 ; $i++) { 
                if (str_contains($string, $i)) 
                { 
                    $hasNum = true;
                    break;
                }
                    
            }

            if ($hasNum == false) echo '<br>É necessario ter pelo menos 1 número'; 

            if (!preg_match('/[A-Z]/',$string)) { 
                echo '<br>é necessario ter pelo menos 1 letra maiuscula';
            }
        }
    }

    function gerarToken($size){ //faz o tamanho de $print ter a quantidade de caracteres de $size
        $token = bin2hex(random_bytes($size/2));


    return $token;
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <style>html {color-scheme: dark;} </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aula Funções</title>
</head>
<header><?=entrada('Rodrigo');?><br></header>
<body>
    <div class='container'>
    <form action="" method="post">
        <h3>Exercicios de Funções:</h3>
        <label for="num1">Digite o 1º número: </label>
        <input type="number" name="num1" value=0 ><br><br> 

        <label for="num2">Digite o 2º número: </label>
        <input type="number" name="num2" value=0 ><br><br> 

        <label for="num3">Digite o 3º número: </label>
        <input type="number" name="num3" value=0 ><br><br> 

        <label for="string1">Digite alguma coisa: </label>
        <input type="text" name="string1"><br><br>

        <label for="string2">Digite outra coisa: </label>
        <input type="text" name="string2">

        <br><br>
        <input type="submit" value="Mostrar">
    </form>
    </div>
    
</body>
</html>

<div class='container'>
<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $var1 = $_POST['num1'];
        $var2 = $_POST['num2'];
        $var3 = $_POST['num3'];
        $var4 = $_POST['string1'];
        $var5 = $_POST['string2'];

    echo " <h3>Exercicio 2 - Soma:</h3>";
    soma($var1, $var2);

    echo " <h3>Exercicio 3 - Impar ou Par:</h3>";
    parImpar(12);

    echo " <h3>Exercicio 4 - Maior número:</h3>";
    maiorNum($var1, $var2, $var3);?>
</div>
<div class="container">
<?php
    echo " <h3>Exercicio 5 - String Invertida:</h3>";
    reverseString($var4);



    echo " <h3>Exercicio 6 - Descontos:</h3>";
    desconto($var1);

    echo " <h3>Exercicio 7 - Login:</h3>";
    genLogin($var4, $var5);

    echo " <h3>Exercicio 8 - Valor frete:</h3>";
    calcFrete($var1);
    
    echo " <h3>Exercicio 9 - Criterio de Senha:</h3>";
    checkSenha($var4);

    echo " <h3>Exercicio 10 - Token Generator:</h3>";
        echo 'Aqui está seu token: ' . gerarToken($var2);

    }
?>

</div>