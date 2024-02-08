<?php
session_start();
include "configs/databaseconnect.php";
if (isset($_POST["action"]) && !empty($_POST["action"])) {
  $action = $_POST["action"];
  $params = json_decode($_POST['params'], true);
  switch ($action) {
    case "add_cart":
      addCart($params, $GLOBALS['db']);
  }
}
?>

<?php

function addCart($params, $db)
{
  $query = $db->prepare("INSERT INTO backets(user_id,product_id) VALUES (:user_id,:product_id)");
  $query->bindParam("user_id", $_SESSION['user_id'], PDO::PARAM_INT);
  $query->bindParam("product_id", json_encode($params['productId']), PDO::PARAM_INT);
  $query->execute();

  echo http_response_code(200);
}

?>