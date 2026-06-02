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
        <form action="/pages/enviarTorcedorAction.php" method="post" class="formulario">
            <div class="texto">
            <label for="nome">Nome Completo:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" required><br>
            </div>
            <div class="radio">
                <label for="vezes">Com que frequência você vai ao estádio?</label><br>

                <input type="radio" id="raramente" name="vezes" value="raramente">
                <label for="raramente">Raramente</label><br>
                <input type="radio" id="pouco" name="vezes" value="pouco">
                <label for="pouco">Pouco</label><br>
                <input type="radio" id="muito" name="vezes" value="muito">
                <label for="muito">Muito</label><br>
                <input type="radio" id="frequente" name="vezes" value="frequente">
                <label for="frequente">Frequentemente</label><br><br>
            </div>

            <div class="checkbox">
            
            <input type="checkbox" id="socio" name="socio" value="socio">
            <label for="socio">Sou socio torcedor</label><br>

            <input type="checkbox" id="camisa" name="camisa" value="camisa">
            <label for="camisa">Possuo Camisa Oficial</label><br>
            </div><br>

            <label for="clube">Clube do coração:</label>
            <div class="">
                <select name="clube" id="clube">Clube do Coração
                    <option value="selecione">Selecione...</option>
                    <option value="Flamengo">Flamengo</option>
                    <option value="Corinthians">Corinthians</option>
                    <option value="Santos">Santos</option>
                    <option value="São Paulo">São Paulo</option>
                    <option value="Palmeiras">Palmeiras</option>
                    <option value="Whatsapp"> Whatsapp</option>
                </select>
            </div>

            <input class="botao" type="submit" value="Enviar">
            <input class="botao" type="reset" value="Limpar">
        </form>        
    </body>
    
</html>