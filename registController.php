<?php

// ここで環境定義ファイルを読み込む
// localhostディレクトリ内にデフォルトと異なる環境の定義ファイルが用意されている時
if (file_exists('env/localhost/define.php')) {
  require_once(dirname(__FILE__) . '/env/localhost/define.php');
// デフォルトの定義ファイルを読み込む
} else {
  require_once(dirname(__FILE__) . '/env/define_example.php');
}

session_start();
$user_name    = $_SESSION['name'];
$email        = $_SESSION['email'];
$message      = $_SESSION['message'];
$time         = date("Y-m-d H:m:s");
$update       = date("Y-m-d H:m:s");

$dsn  ='mysql:dbname=inquiryform;host=localhost';
$name = PHPMYADMIN_USER;
$pass = PHPMYADMIN_PASSWORD;

try{
  $dbh  = new PDO($dsn, $name, $pass);
  $sql = 'INSERT INTO contacts(user_name, email, contact_message, created, updated) VALUES (:user_name, :email, :contact_message, :created, :updated)';
  $stmt = $dbh->prepare($sql);
  $params = array(':user_name' => $user_name, ':email' => $email, 'contact_message' => $message, 'created' => $time, 'updated' => $update);
  $stmt->execute($params);
} catch (PDOExcetion $e) {
  echo '接続失敗です'. $e->getMessage();
  exit();
}