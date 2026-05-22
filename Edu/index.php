
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file = $_POST['doc'];
    if (!empty($file)) {
        header("Location: .{$file}/index.php");
        exit;
    }
}

function listarPastas($dir, $ignorar = []) { 
    $pastas = array_map('basename', array_filter(glob("$dir/*"), 'is_dir'));
    return array_diff($pastas, $ignorar);
}

$exclusao = ["Styles", "Fonts", "_DB", "Images","_Programs","_Aulas", "_Programs", "_models", "_antigo", "styles", "exercicios-2025"];


$pastas = listarPastas("./", $exclusao);
?>


<!DOCTYPE html>
<html lang="pt-BR">
    <style>html {color-scheme: dark;}</style>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edu!</title>
        <link rel="stylesheet" href="/Styles/style2.css">
    </head>

    <header>
        <h1>Escolha o Documento!</h1>
        <p style="color: lightgreen; font-size: 28px; display: flex; justify-content:center; position: relative; bottom: 48px; zoom: 0.4;">Pasta Eduardo</p>
    </header>

    <body>
        <form action='<?php echo $file?>' method="post">
                <select title="doc" name="doc" id="doc">
                <option value="">Selecione...</option>
                    <?php foreach ($pastas as $pasta): ?>
                        <option value="/<?= $pasta ?>"><?= $pasta ?></option>
                    <?php endforeach; ?>
                </select>

            <?php if ($$file == true) {?>
                <input class="botao" type="submit" value="Ir para documento">
            <?php } else { ?>
                <input class="botao" type="submit" value="Ir para documento" >
            <?php } ?>

        </form>
        <div class="credits">Developed by Rodrigo L. Cassilhas</div>
    </body>
    
</html>

