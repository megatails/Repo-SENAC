<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
    <form action="" method="post">
        <label for="valor"></label>
        <input type="number" name="valor" id="valor" placeholder="Quanto custou o produto?">
        <br>
        <label for="forma">Escolha a forma de pagamento: <br>1 - Dinheiro <br> 2 - Cheque <br> 3 - Cartão</label>
        <input type="number" min="1" name="parc" id="parc" placeholder="Nº de Parcelas"><br><br>
        <input type="number" name="forma" id="forma" placeholder="Forma de Pagamento">
        <input type="submit">
    </form>

    </form>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor = $_POST['valor'];
        $forma = $_POST['forma'];
        $parcela = $_POST['parc'];
        switch ($forma) {
            case 1:
                $escolha = 1;
                echo "valor final com desconto de 5%:  " . '<span style="color: green;">' . $valor - ($valor*0.05) . "</span>";
                break;
            case 2:
                $escolha = 2;
                echo "valor final com juros de 5%: " . '<span style="color: green;">' . $valor*1.05 . "</span>";
                break;
            case 3:
                $escolha = 3;
                echo "valor final com juros de 7%: " . '<span style="color: green;">'  . $valor*1.07 . "</span>" . "<br><br> valor das parcelas: " . '<span style="color: green;">' . ($valor*1.07) / $parcela . "</span>";
                break;

            default:
            echo "";
            break;
        }
    }


?>