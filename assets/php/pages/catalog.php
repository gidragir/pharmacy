<link rel="stylesheet" type="text/css" href="assets/css/miscs.css">
<link rel="stylesheet" type="text/css" href="assets/css/catalog.css">

<main class="misc_main catalog_main">

  <div class="catalog_label">
    <label for="catalog">Лекарственные средства</label>
  </div>
  <div id="catalog" class="catalog">
    <div class="filters">
      <h3>Фильтры</h3>
      <form action="get">

        <button>Применить</button>
      </form>
    </div>

    <div class="products_container">

      <?php

      if ($product == null) {
        $step = 7;
        $from = $step * ($page - 1);
        $products = $GLOBALS['db']->query("SELECT * FROM `products` LIMIT $from,$step")->fetchAll(PDO::FETCH_ASSOC);
      } else {
        $product_name = urldecode($product);
        $products = $GLOBALS['db']->query("SELECT * FROM `products` WHERE `name` LIKE '%$product_name%'")->fetchAll(PDO::FETCH_ASSOC);
      }
      foreach ($products as $product_data) :
      ?>
        <div class="product_div" onclick="javascript:this.children[0].submit();">
          <form action="product" class="product_form" action="get">
            <input type="hidden" name="id" value="<?= $product_data['id'] ?>">
            <div class="img_div">
              <img class="product_img" src="data:image/png;base64,<?= base64_encode($product_data['image']) ?>" alt="">
            </div>
            <div class="name_div">
              <span><?= $product_data['name'] ?></span>
            </div>
            <div class="form_bottom">
              <span><?= $product_data['price'] ?></span>
              <div class="buttons">
                <button class="product_button">
                  <svg width="1.2em" height="1.2em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.993 5.09691C11.0387 4.25883 9.78328 3.75 8.40796 3.75C5.42122 3.75 3 6.1497 3 9.10988C3 10.473 3.50639 11.7242 4.35199 12.67L12 20.25L19.4216 12.8944L19.641 12.6631C20.4866 11.7172 21 10.473 21 9.10988C21 6.1497 18.5788 3.75 15.592 3.75C14.2167 3.75 12.9613 4.25883 12.007 5.09692L12 5.08998L11.993 5.09691ZM12 7.09938L12.0549 7.14755L12.9079 6.30208L12.9968 6.22399C13.6868 5.61806 14.5932 5.25 15.592 5.25C17.763 5.25 19.5 6.99073 19.5 9.10988C19.5 10.0813 19.1385 10.9674 18.5363 11.6481L18.3492 11.8453L12 18.1381L5.44274 11.6391C4.85393 10.9658 4.5 10.0809 4.5 9.10988C4.5 6.99073 6.23699 5.25 8.40796 5.25C9.40675 5.25 10.3132 5.61806 11.0032 6.22398L11.0921 6.30203L11.9452 7.14752L12 7.09938Z" fill="#000000" />
                  </svg>
                </button>
                <button class="product_button">
                  <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1.2em" height="1.2em" viewBox="0 0 480 480" xml:space="preserve">
                    <path d="M424.562,204.565c0-24.936-20.11-45.131-44.953-45.427L254.11,12.751c-5.745-6.723-17.263-6.723-23.008,0L105.637,159.139c-24.89,0.266-44.986,20.495-44.986,45.427H0l60.651,272.938h363.911l60.649-272.938H424.562z M135.889,170.391L242.606,45.892L349.31,170.391c-9.567,8.352-15.724,20.496-15.724,34.175H151.628C151.628,190.886,145.454,178.743,135.889,170.391zM90.978,447.172h-5.995l-6.737-30.322h12.732V447.172z M90.978,386.523H71.504l-6.737-30.332h26.21V386.523z M90.978,325.87H58.017l-6.737-30.322h39.698V325.87z M90.978,265.217H44.542l-6.737-30.325h53.172V265.217z M181.955,447.172h-60.651V416.85h60.651V447.172z M181.955,386.523h-60.651v-30.332h60.651V386.523z M181.955,325.87h-60.651v-30.322h60.651V325.87zM181.955,265.217h-60.651v-30.325h60.651V265.217z M272.933,447.172h-60.65V416.85h60.65V447.172z M272.933,386.523h-60.65v-30.332h60.65V386.523z M272.933,325.87h-60.65v-30.322h60.65V325.87z M272.933,265.217h-60.65v-30.325h60.65V265.217zM363.908,447.172h-60.653V416.85h60.653V447.172z M363.908,386.523h-60.653v-30.332h60.653V386.523z M363.908,325.87h-60.653v-30.322h60.653V325.87z M363.908,265.217h-60.653v-30.325h60.653V265.217z M400.246,447.172h-6.011V416.85h12.736L400.246,447.172z M413.72,386.523h-19.484v-30.332h26.21L413.72,386.523z M427.198,325.87h-32.963v-30.322h39.684L427.198,325.87zM394.235,265.217v-30.325h53.157l-6.72,30.325H394.235z" />
                  </svg>
                </button>
              </div>
            </div>
          </form>
        </div>
      <?php
      endforeach
      ?>

    </div>

    <div class="pagination">
      <?php if ($product == null) : ?>
        <ul>
          <li id="pagination_up" class="pagination_arrow">
            <a href="catalog?page=<?= ($page == 1) ? 1 : $page - 1 ?>">
              <svg width="1.4em" height="1.4em" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.3868 21.3868C16.9963 21.7773 16.3631 21.7773 15.9726 21.3868L9.86147 15.2757C9.47094 14.8852 9.47095 14.252 9.86147 13.8615L15.9726 7.75036C16.3631 7.35983 16.9963 7.35983 17.3868 7.75036C17.7773 8.14088 17.7773 8.77405 17.3868 9.16457L11.9828 14.5686L17.3868 19.9726C17.7773 20.3631 17.7773 20.9963 17.3868 21.3868Z" fill="#0B7972"></path>
              </svg>
            </a>
          </li>
          <?php
          $total = round($GLOBALS['db']->query("SELECT COUNT(*) FROM `products`")->fetchColumn() / $step,);
          $index = 1;
          while ($index <= $total) :
          ?>
            <li <?= ($index == $page) ? "class='current_page'" : "" ?>><a href="catalog?page=<?= $index ?>"><?= $index ?></a></li>
          <?php
            $index = $index + 1;
          endwhile
          ?>
          <li id="pagination_down" class="pagination_arrow">
            <a href="catalog?page=<?= ($page == $total) ? $total : $page + 1 ?>">
              <svg width="1.4em" height="1.4em" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.3868 21.3868C16.9963 21.7773 16.3631 21.7773 15.9726 21.3868L9.86147 15.2757C9.47094 14.8852 9.47095 14.252 9.86147 13.8615L15.9726 7.75036C16.3631 7.35983 16.9963 7.35983 17.3868 7.75036C17.7773 8.14088 17.7773 8.77405 17.3868 9.16457L11.9828 14.5686L17.3868 19.9726C17.7773 20.3631 17.7773 20.9963 17.3868 21.3868Z" fill="#0B7972"></path>
              </svg>
            </a>
          </li>
        </ul>
      <?php endif; ?>
    </div>
  </div>
</main>