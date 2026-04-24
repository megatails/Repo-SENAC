<?php 
    function entrada($nome){
        echo "<h3>Exercicio 1 - Saudação</h3>";
        echo "Saudações " . $nome . "<br>Boas Vindas ao meu site!!!";
    }

    entrada('Rodrigo');

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
        echo "<h1 class='resposta'>Há número repetidos! <br> tente números diferentes<h1>";
    }
    }

    function reverseString(){
        
    }

    function desconto(){

    }

    function genLogin(){

    }

    function calcFrete(){

    }

    function checkSenha(){

    }

    function gerarToken(){

    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aula Funções</title>
</head>
<body>
    <form action="" method="post">
        <h3>Exercicios de Funções:</h3>
        <label for="num1">Digite o 1º número: </label>
        <input type="number" name="num1" value=0 ><br><br> 

        <label for="num2">Digite o 2º número: </label>
        <input type="number" name="num2" value=0 ><br><br> 

        <label for="num3">Digite o 3º número: </label>
        <input type="number" name="num3" value=0 ><br><br> 

        <label for="string">Digite alguma coisa: </label>

        
        <input type="submit" value="Mostrar">
    </form>
    
</body>
</html>

<?php 
    echo " <h3>Exercicio 2 - Soma:</h3>";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $var1 = $_POST['num1'];
        $var2 = $_POST['num2'];
        $var3 - $_POST['num3'];
        soma($var1, $var2);
    }

    echo " <h3>Exercicio 3 - Impar ou Par:</h3>";
    parImpar(12);

    echo " <h3>Exercicio 4 - Maior número:</h3>";
    maiorNum($var1, $var2, $var3);

    echo " <h3>Exercicio 5 - String Invertida:</h3>";

    echo " <h3>Exercicio 6 - Descontos:</h3>";

    echo " <h3>Exercicio 7 - Login:</h3>";

    echo " <h3>Exercicio 8 - Valor frete:</h3>";

    echo " <h3>Exercicio 9 - Criterio de Senha:</h3>";

    echo " <h3>Exercicio 10 - Token Generator:</h3>";
?>