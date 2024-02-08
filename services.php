<?php

$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'GET') {

}
elseif ($method == 'POST') {
  $action = $_POST['action'];

  $methods = array(
    'add_cart' => 'assets/php/service/product_actions.php',
  );

  include($methods[$action]);
}

?>
