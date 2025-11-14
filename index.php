
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file = $_POST['doc'];
    if (!empty($file)) {
        header("Location: {$file}/index.php");
        exit;
    }
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Venha Ser Torcedor!</title>
        <link rel="stylesheet" href="/Styles/style.css">
    </head>

    <header>
        <h1>Venha Ser Torcedor!<span><img width="100%" src="tennaDance.gif" alt="Tenna" class="tenna"></span></h1>
        <div class="credits">Developed by Rodrigo L. Cassilhas</div>
    </header>

    <body>
        <form action='<?php echo $file?>' method="post" class="formulario">

            <label for="doc">Selecione o Documento:</label>
            <div class="">
                <select name="doc" id="doc">Clube do Coração
                    <option value="">Selecione...</option>
                    <option value="/Aula07-11">Aula07-11</option>
                    <option value="/Aula10-11">Aula10-11</option>
                    <option value="/Aula12-11_Eduardo">Aula12-11_Eduardo</option>
                    <option value="/Torcedor">Torcedor</option>
                </select>
            </div>

            <input class="botao" type="submit" value="Ir para documento">
        </form>        
    </body>
    
</html>

