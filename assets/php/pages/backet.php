<link rel="stylesheet" type="text/css" href="assets/css/miscs.css">

<main class="misc_main">
  <div class="misc_section">
    <h2>Корзина</h2>
    <div class="misc_div">
      <? if (isset($_SESSION['user_id'])) : ?>
        <?php
        $query = $GLOBALS['db']->prepare("SELECT * FROM `backets` LEFT JOIN `products` ON backets.product_id = products.id");
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_ASSOC);
        if (!$products) {
          echo '<p>Нет товаров в корзине</p>';
          exit();
        }
        foreach ($products as $product_data) :
        ?>
          <div class="product_div">
              <img class="product_img" src="data:image/png;base64,<?= base64_encode($product_data['image']) ?>" alt="">
              <span><?= $product_data['name'] ?></span>
              <span><?= $product_data['price'] ?></span>
          </div>
        <?php
        endforeach
        ?>

        <button class="buttom_pay">Оплатить</button>
      <? else : ?>
        <p>Требуется авторизоваться для получения товаров корзине</p>
      <? endif; ?>
    </div>
  </div>
</main>