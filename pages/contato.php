<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/basico.css" />
    <link rel="stylesheet" href="/css/form-contato.css">
    <title>Contato</title>
</head>

<body>
    <?php include "./partials/header.php" ?>

    <main class="contato">
        <section class="contato-titulo">
            <h1>Contato</h1>
        </section>
        <section class="contato-corpo">
            <form action="/pages/contato.php" id="form" class="contato-form" id="form-contato">
                <input class="contato-input" type="text" name="nome" id="nome" placeholder="nome">
                <input class="contato-input" type="text" name="sobrenome" id="sobrenome" placeholder="sobrenome">
                <input class="contato-input duas" type="mail" name="email" id="email" placeholder="email">
                <input class="contato-input" type="tel" name="celular" id="celular" placeholder="celular">
                <input class="contato-input" type="tel" name="telefone" id="telefone" placeholder="telefone">
                <textarea class="contato-input duas" name="mensagem" id="mensagem" rows="5" placeholder="mensagem"></textarea>
            </form>
            <div class="contato-butoes">
                <button class="contato-butao" type="submit" form="form">
                    Enviar
                </button>
            </div>
        </section>
    </main>

    <?php include "./partials/footer.php" ?>
    <script src="/js/header.js"></script>
</body>

</html>