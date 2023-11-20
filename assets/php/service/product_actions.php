<?php
if (isset($_POST["action"]) && !empty($_POST["action"])) {
  $action = $_POST["action"];
  $params = json_decode($_POST['params'], true);
  switch ($action) {
    case "add_favorite":
      addFavorite($params);
    case "add_cart":
      addCart($params);
  }
}
?>

<?php
function addFavorite($params)
{
  // echo http_response_code(200);
  echo json_encode($params['productId']);
}

function addCart($params)
{
  // echo http_response_code(200);
  echo json_encode($params['productId']);
}

?>