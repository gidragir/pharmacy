<?php
if (isset($_POST['login'])) {
  $name = $_POST['name'];
  $password = $_POST['password'];
  $query = $GLOBALS['db']->prepare("SELECT * FROM users WHERE name=:name");
  $query->bindParam("name", $name, PDO::PARAM_STR);
  $query->execute();
  $result = $query->fetch(PDO::FETCH_ASSOC);
  if (!$result) {
    echo '<p class="error">Неверные пароль или имя пользователя!</p>';
  } else {
    if ($password = $result['password']) {
      $_SESSION['user_id'] = $result['id'];
      header("Location: /");
      die();
    } else {
      echo '<p class="error"> Неверные пароль или имя пользователя!</p>';
    }
  }
}
?>

<link rel="stylesheet" type="text/css" href="assets/css/login.css">

<main class="login_div">
  <form method="post" action="" name="signin-form">
    <div class="form-element">
      <label>Логин</label>
      <input type="text" name="name" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
      <label>Пароль</label>
      <input type="password" name="password" required />
    </div>
    <div>
      <button class="form_button" type="submit" name="login" value="login">Войти</button>
    </div>
  </form>
</main>