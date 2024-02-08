<div class="catalog_header">
  <a href="catalog?page=1">Каталог товаров</a>

  <form action="catalog" method="get" class="search" enctype="text/plain">
    <input class="input_search" name="product" value="<?= (isset($_GET['product'])) ? urldecode($_GET['product']) : '' ?>" type="text" placeholder="Название товара">
    <button class="search_button" type="submit">
      <svg width="1.5em" height="1.5em" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.7343 21.4494C18.4087 22.4242 16.7716 23 15 23C10.5817 23 7 19.4183 7 15C7 10.5817 10.5817 7 15 7C19.4183 7 23 10.5817 23 15C23 16.7717 22.4241 18.4088 21.4493 19.7345L26.704 24.9892C27.1776 25.4628 27.1776 26.2306 26.704 26.7042C26.2304 27.1778 25.4626 27.1778 24.989 26.7042L19.7343 21.4494ZM21 15C21 18.3137 18.3137 21 15 21C11.6863 21 9 18.3137 9 15C9 11.6863 11.6863 9 15 9C18.3137 9 21 11.6863 21 15Z" fill="#000000"></path>
      </svg>
    </button>
  </form>

  <ul class="user_data">
    <li>
      <a href="backet">
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1.5em" height="1.5em" viewBox="0 0 480 480" xml:space="preserve">
          <path d="M424.562,204.565c0-24.936-20.11-45.131-44.953-45.427L254.11,12.751c-5.745-6.723-17.263-6.723-23.008,0L105.637,159.139c-24.89,0.266-44.986,20.495-44.986,45.427H0l60.651,272.938h363.911l60.649-272.938H424.562z M135.889,170.391L242.606,45.892L349.31,170.391c-9.567,8.352-15.724,20.496-15.724,34.175H151.628C151.628,190.886,145.454,178.743,135.889,170.391zM90.978,447.172h-5.995l-6.737-30.322h12.732V447.172z M90.978,386.523H71.504l-6.737-30.332h26.21V386.523z M90.978,325.87H58.017l-6.737-30.322h39.698V325.87z M90.978,265.217H44.542l-6.737-30.325h53.172V265.217z M181.955,447.172h-60.651V416.85h60.651V447.172z M181.955,386.523h-60.651v-30.332h60.651V386.523z M181.955,325.87h-60.651v-30.322h60.651V325.87zM181.955,265.217h-60.651v-30.325h60.651V265.217z M272.933,447.172h-60.65V416.85h60.65V447.172z M272.933,386.523h-60.65v-30.332h60.65V386.523z M272.933,325.87h-60.65v-30.322h60.65V325.87z M272.933,265.217h-60.65v-30.325h60.65V265.217zM363.908,447.172h-60.653V416.85h60.653V447.172z M363.908,386.523h-60.653v-30.332h60.653V386.523z M363.908,325.87h-60.653v-30.322h60.653V325.87z M363.908,265.217h-60.653v-30.325h60.653V265.217z M400.246,447.172h-6.011V416.85h12.736L400.246,447.172z M413.72,386.523h-19.484v-30.332h26.21L413.72,386.523z M427.198,325.87h-32.963v-30.322h39.684L427.198,325.87zM394.235,265.217v-30.325h53.157l-6.72,30.325H394.235z" />
        </svg>
      </a>
    </li>

    <? if (isset($_SESSION['user_id'])) : ?>
      <?php
      $query = $GLOBALS['db']->prepare("SELECT * FROM users WHERE id=:id");
      $query->bindParam("id", $_SESSION['user_id'], PDO::PARAM_STR);
      $query->execute();
      $result = $query->fetch(PDO::FETCH_ASSOC);
      ?>
      <p><?= $result["name"] ?></p>
    <? else : ?>
      <li>
        <a href="login">
          Войти
        </a>
      </li>
      <li>
        <a href="registration">
          Зарегистрироваться
        </a>
      </li>
    <? endif; ?>
  </ul>

</div>