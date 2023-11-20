<footer>
  <div class="footer_section">
    <ul class="section_ul">
      <h3>Информация</h3>
      <li><a href="delivery">Доставка</a></li>
    </ul>
    <ul class="section_ul">
      <h3>Компания</h3>
      <li><a href="about">О нас</a></li>
      <li><a href="contacts">Контакты</a></li>
    </ul>
    <ul class="section_ul">
      <h3>Мы в соцсетях</h3>
      <li>Инстраграмм</li>
    </ul>
  </div>

  <div class="footer_section branches_section">
    <h3>Филиалы</h3>
    <div class="footer_branches">
      <?php
      $branches = $GLOBALS['db']->query('SELECT `name`,`phone_number` FROM `branches` LIMIT 4')->fetchAll(PDO::FETCH_ASSOC);

      foreach ($branches as $branch) :
      ?>
        <div class="footer_branch"><?= $branch['name'] ?>, 8<?= $branch['phone_number'] ?></div>
      <?php endforeach ?>
    </div>
    <h3><a href="branches">Все филиалы</a></h3>
  </div>

</footer>