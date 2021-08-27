<?php
require_once "./../functions/selecionarProduto.php";

$id = $_GET['id'] ?? null;
if ($id === null) {
    header('Location: ./../index.php');
    exit;
}

$produto = selecionarProduto($id);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/basico.css" />
    <link rel="stylesheet" href="/css/detalhes.css">
    <title>detalhes</title>
</head>

<body>
    <?php include "./partials/header.php" ?>

    <main class="detalhe-produto">
        <img class="detalhe-produto-img" style="--cor:<?php echo $produto['cor'] ?>;" src="<?php echo $produto['img'] ?>" alt="produto">
        <div class="detalhe-produto-info">
            <h2 class="detalhe-info-titulo"><?php echo $produto['titulo'] ?></h2>
            <h3 class="detalhe-info-preco">$ <?php echo $produto['preco'] ?></h3>
            <p class="detalhe-info-descricao"><?php echo $produto['descricao'] ?></p>
            <button class="detalhe-info-butao">Comprar</button>
        </div>
    </main>

    <?php include "./partials/footer.php" ?>
    <script src="/js/header.js"></script>
</body>

</html>