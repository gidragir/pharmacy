<?php
require_once 'pdoconfig.php';

try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $username,$password, [
    PDO::ATTR_PERSISTENT => true
  ]);
  $GLOBALS['db'] = $conn;
} catch (PDOException $pe) {
  echo("Could not connect to the database $dbname :" . $pe->getMessage());
}
