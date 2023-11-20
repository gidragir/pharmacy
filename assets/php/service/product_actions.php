<?php
if (isset($_POST["action"]) && !empty($_POST["action"])) {
  $action = $_POST["action"];
  $product_id = $_POST["product_id"];
  switch ($action) {
    case "add_favorite":
      addFavorite($product_id);  
  } 
}  
?>

<?php 
function addFavorite($id) {
  echo json_encode(array('id' => $id));
}

?>