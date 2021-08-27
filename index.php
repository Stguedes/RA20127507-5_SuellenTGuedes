<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/css/basico.css" />
  <link rel="stylesheet" href="/css/grid-produtos.css">
  <title>Home</title>
</head>

<body>
  <?php include "./pages/partials/header.php" ?>
  <?php include_once "./data/produtos.php" ?>

  <main class="main-produtos">
    <section class="titulo-produtos">
      <h1>Nossos Produtos</h1>
    </section>
    <section class="grid-produtos">
      <?php foreach ($listaProdutos as $indice => $produto) { ?>
        <div class="car-prod">
          <img src="<?php echo $produto['img'] ?>" class="card-prod-img" style="--cor:<?php echo $produto['cor'] ?>;" alt="imagem">
          <h3 class="card-prod-titulo">
            <?php echo $produto['titulo'] ?>
          </h3>
          <p class="card-prod-preco">
            $ <?php echo $produto['preco'] ?>
          </p>
        </div>
      <?php } ?>
    </section>
  </main>

  <?php include "./pages/partials/footer.php" ?>
  <script src="./js/header.js"></script>
</body>

</html>