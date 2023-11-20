<link rel="stylesheet" type="text/css" href="assets/css/miscs.css">
<link rel="stylesheet" type="text/css" href="assets/css/product_card.css">

<main class="misc_main">
  <?php
  $products = $GLOBALS['db']->query("SELECT * FROM `products` WHERE `id` = $id")->fetchAll(PDO::FETCH_ASSOC);
  $product_data = $products[0];
  ?>
  <div class="misc_section">
    <h2><?= $product_data['name'] ?></h2>
    <div class="misc_div">
      <div class="product_card">
        <div class="card_maindiv">
          <img class="card_img" src="data:image/png;base64,<?= base64_encode($product_data['image']) ?>" alt="">
          <h3>Цена: <?= $product_data['price'] ?></h3>
          <div class="card_buttons">
            <button class="card_button" id="data-bf" data-product=<?= $product_data['id'] ?>>
              <svg width="1.2em" height="1.2em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.993 5.09691C11.0387 4.25883 9.78328 3.75 8.40796 3.75C5.42122 3.75 3 6.1497 3 9.10988C3 10.473 3.50639 11.7242 4.35199 12.67L12 20.25L19.4216 12.8944L19.641 12.6631C20.4866 11.7172 21 10.473 21 9.10988C21 6.1497 18.5788 3.75 15.592 3.75C14.2167 3.75 12.9613 4.25883 12.007 5.09692L12 5.08998L11.993 5.09691ZM12 7.09938L12.0549 7.14755L12.9079 6.30208L12.9968 6.22399C13.6868 5.61806 14.5932 5.25 15.592 5.25C17.763 5.25 19.5 6.99073 19.5 9.10988C19.5 10.0813 19.1385 10.9674 18.5363 11.6481L18.3492 11.8453L12 18.1381L5.44274 11.6391C4.85393 10.9658 4.5 10.0809 4.5 9.10988C4.5 6.99073 6.23699 5.25 8.40796 5.25C9.40675 5.25 10.3132 5.61806 11.0032 6.22398L11.0921 6.30203L11.9452 7.14752L12 7.09938Z" fill="#000000" />
              </svg>
            </button>
            <button class="card_button">
              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1.2em" height="1.2em" viewBox="0 0 480 480" xml:space="preserve">
                <path d="M424.562,204.565c0-24.936-20.11-45.131-44.953-45.427L254.11,12.751c-5.745-6.723-17.263-6.723-23.008,0L105.637,159.139c-24.89,0.266-44.986,20.495-44.986,45.427H0l60.651,272.938h363.911l60.649-272.938H424.562z M135.889,170.391L242.606,45.892L349.31,170.391c-9.567,8.352-15.724,20.496-15.724,34.175H151.628C151.628,190.886,145.454,178.743,135.889,170.391zM90.978,447.172h-5.995l-6.737-30.322h12.732V447.172z M90.978,386.523H71.504l-6.737-30.332h26.21V386.523z M90.978,325.87H58.017l-6.737-30.322h39.698V325.87z M90.978,265.217H44.542l-6.737-30.325h53.172V265.217z M181.955,447.172h-60.651V416.85h60.651V447.172z M181.955,386.523h-60.651v-30.332h60.651V386.523z M181.955,325.87h-60.651v-30.322h60.651V325.87zM181.955,265.217h-60.651v-30.325h60.651V265.217z M272.933,447.172h-60.65V416.85h60.65V447.172z M272.933,386.523h-60.65v-30.332h60.65V386.523z M272.933,325.87h-60.65v-30.322h60.65V325.87z M272.933,265.217h-60.65v-30.325h60.65V265.217zM363.908,447.172h-60.653V416.85h60.653V447.172z M363.908,386.523h-60.653v-30.332h60.653V386.523z M363.908,325.87h-60.653v-30.322h60.653V325.87z M363.908,265.217h-60.653v-30.325h60.653V265.217z M400.246,447.172h-6.011V416.85h12.736L400.246,447.172z M413.72,386.523h-19.484v-30.332h26.21L413.72,386.523z M427.198,325.87h-32.963v-30.322h39.684L427.198,325.87zM394.235,265.217v-30.325h53.157l-6.72,30.325H394.235z" />
              </svg>
            </button>
          </div>
        </div>

        <div class="card_info">
          <h3>Описание</h3>
          <div class="card_description">
            Большой текст
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script type="text/javascript" src="assets/js/product_actions.js"></script>
</main>