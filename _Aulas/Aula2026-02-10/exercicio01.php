<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <form action="" method="post">
    <label for="valor">Digite um número entre 0 e 5</label>
    <input type="text" name="valor" id="valor" value="">
    <input type="submit">
    </form>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor = $_POST['valor'];
        switch ($valor) {
            case 0:
                echo "0 = zero (pt/en)";
                break;
            case 1:
                echo "1 = um (pt) / one (en)";
                break;
            case 2:
                echo "2 = dois (pt) / two (en)";
                break;
            case 3:
                echo "3 = três (pt) / three (en)";
                break;
            case 4:
                echo '<img width="10%" src="jhin.gif" alt="4" >4 = QUATRO (pt) / FOUR (en)<img width="10%" src="jhin.gif" alt="4" ><br><img width="10%" src="jhin.gif" alt="4" >&nbsp;>&nbsp;>&nbsp;>&nbsp;>&nbsp;>&nbsp;>&nbsp;>&nbsp;>&nbsp;>&nbsp;>&nbsp;>&nbsp;>&nbsp;>&nbsp;<img width="10%" src="jhin.gif" alt="4" >';
                break;
            case 5:
                echo "5 = cinco (pt) / five (en)";
                break;
            default:
            echo "Opção inválida";
            break;
        }
    }
?>