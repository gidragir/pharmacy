<?php
if (isset($_POST['register'])) {
  $name = $_POST['name'];
  $phone_number = $_POST['phone_number'];
  $password = $_POST['password'];
  $query = $GLOBALS['db']->prepare("SELECT * FROM users WHERE phone_number=:phone_number");
  $query->bindParam("phone_number", $phone_number, PDO::PARAM_STR);
  $query->execute();
  if ($query->rowCount() > 0) {
    echo '<p class="error">Этот адрес уже зарегистрирован!</p>';
  }
  if ($query->rowCount() == 0) {
    $query = $GLOBALS['db']->prepare("INSERT INTO users(name,password,phone_number) VALUES (:name,:password,:phone_number)");
    $query->bindParam("name", $name, PDO::PARAM_STR);
    $query->bindParam("password", $password, PDO::PARAM_STR);
    $query->bindParam("phone_number", $phone_number, PDO::PARAM_STR);
    $result = $query->execute();
    if ($result) {
      $_SESSION['user_id'] = $result['id'];
      header("Location: /");
      die();
    } else {
      echo '<p class="error">Неверные данные!</p>';
    }
  }
} ?>

<link rel="stylesheet" type="text/css" href="assets/css/login.css">

<main class="login_div">
  <form method="post" action="" name="signup-form">
    <div class="form-element">
      <label>Логин</label>
      <input type="text" name="name" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
      <label>Номер телефона</label>
      <input type="tel" name="phone_number" pattern="[0-9]{10}" required />
    </div>
    <div class="form-element">
      <label>Пароль</label>
      <input type="password" name="password" required />
    </div>
    <button class="form_button" type="submit" name="register" value="register">Зарегистрироваться</button>
  </form>
</main>