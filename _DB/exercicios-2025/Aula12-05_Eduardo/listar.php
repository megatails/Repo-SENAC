<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Agendamentos</title>
</head>
<body>
    <table>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Servico</th>
            <th>Data</th>
            <th>Hora</th>
        </tr>
        <?php
            if(file_exists("agendamento.txt")) 
                {
                $linhas = file("agendamento.txt", FILE_IGNORE_NEW_LINES);
                foreach($linhas as $linha);
                    $dados = explode("|", $linha);
                    echo "<tr>";
                    foreach($dados as $d){
                        echo "<td>".trim($d)."</td>";
                    }
                    echo "</tr>";
            }
            else {
                echo"<tr><td colspan=''5>Nenhum agendamento encontrado.</td></tr>";
            }
        ?>
        
    </table>
    <a class="botao-lista" href="index.php">Voltar ao formulário</a>
</body>
</html>