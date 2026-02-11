<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <?php  if(empty($_POST['valor'])) {?>
    <form action="" method="post">
        <label for="valor">Quanto custou o produto?</label>
        <input type="number" name="valor" id="valor">
        <input type="submit">
    </form>
    
    <?php }  if(!empty($_POST['valor'])) { ?>
    <form action="" method="post">
        <label for="forma">Escolha a forma de pagamento: <br>1 - Dinheiro <br> 2 - Cheque <br> 3 - Cartão</label>
        <input type="number" name="forma" id="forma">
        <input type="submit">
    <?php } ?>

    </form>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor = $_POST['valor'];
        $forma = $_POST['forma'];
        switch ($forma) {
            case 1:
                $escolha = 1;
                echo "valor final: " . $valor*0.05;
                break;
            case 2:
                $escolha = 2;
                echo "<form> 
                    <label for='data'>Escolha a forma de pagamento: <br>1 - Dinheiro <br> 2 - Cheque <br> 3 - Cartão</label>
                    <input type='date' name='data' id='data'>
                </form>";
                echo "valor final: " . $valor*1.05;
                break;
            case 3:
                $escolha = 3;
                echo "<form>
                <label for='parcela'>Escolha o número de parcelas: </label>
                <input type='number' name='parcela' id='parcela'>
                </form>";

                echo "valor final: " . $valor*1.07;
                break;

            default:
            echo "";
            break;
        }
    }


?>