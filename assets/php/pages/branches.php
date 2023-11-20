<link rel="stylesheet" type="text/css" href="assets/css/miscs.css">

<main class="misc_main">
  <?php include "assets/php/components/navigation.php" ?>
  <div class="misc_section">
    <h2>Филиалы</h2>
    <div class="misc_div">
      <div class="misc_branches">
        <?php
        $branches = $GLOBALS['db']->query('SELECT `name` FROM `branches`')->fetchAll(PDO::FETCH_ASSOC);

        foreach ($branches as $branch) :
        ?>
          <div class="misc_branch"><?= $branch['name'] ?></div>
        <?php endforeach ?>
      </div>
    </div>
  </div>
</main>