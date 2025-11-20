
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file = $_POST['doc'];
    if (!empty($file)) {
        header("Location: {$file}/index.php");
        exit;
    }
}

function listarPastas($dir, $ignorar = []) {
    $pastas = array_map('basename', array_filter(glob("$dir/*"), 'is_dir'));
    return array_diff($pastas, $ignorar);
}

$pastas = listarPastas("./", ["Styles", "Fonts"]);
?>


<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portal!</title>
        <link rel="stylesheet" href="/Styles/style2.css">
    </head>

    <header>
        <h1>Escolha o Documento!</h1>
        <div class="credits">Developed by Rodrigo L. Cassilhas</div>
    </header>

    <body>
        <form action='<?php echo $file?>' method="post" class="formulario">

            <label for="doc">Selecione o Documento:</label>
            <div class="">
                <select name="doc" id="doc">
                <option value="">Selecione...</option>
                    <?php foreach ($pastas as $pasta): ?>
                        <option value="/<?= $pasta ?>"><?= $pasta ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <input class="botao-iris group" type="submit" value="Ir para documento">
        </form>        
    </body>
    
</html>

