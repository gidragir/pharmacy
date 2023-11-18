<link rel="stylesheet" type="text/css" href="assets/css/miscs.css">
<link rel="stylesheet" type="text/css" href="assets/css/catalog.css">

<main class="misc_main catalog_main">
  <div class="catalog_label">
    asdad
  </div>
  <div class="catalog">
    <div class="products_container">

      <?php
      $step = 7;
      $from = $step * ($page - 1);

      $products = $GLOBALS['db']->query("SELECT `name`, `image` FROM `products` LIMIT $from,$step")->fetchAll(PDO::FETCH_ASSOC);
      foreach ($products as $product) :
      ?>
        <div class="product_div">
          <form class="product_form" action="get">
            <div class="img_div">
              <img class="product_img" src="data:image/png;base64,<?= base64_encode($product['image']) ?>" alt="">
            </div>
            <div class="name_div">
              <span><?= $product['name'] ?></span>
            </div>
            <div class="form_bottom">
              <span>1555</span>
              <button>В корзину</button>
            </div>
          </form>
        </div>
      <?php
      endforeach
      ?>

    </div>

    <div class="pagination">
      <ul>
        <?php
        $total = round($GLOBALS['db']->query("SELECT COUNT(*) FROM `products`")->fetchColumn() / $step, );
        $index = 1;
        while ($index <= $total) :
        ?>
          <li><a href="/catalog?page=<?= $index ?>"><?= $index ?></a></li>
        <?php
          $index = $index + 1;
        endwhile
        ?>
      </ul>
    </div>
  </div>

</main>