<?php 
  session_start();
  $user_name    = $_SESSION['name'];
  $email        = $_SESSION['email'];
  $message      = $_SESSION['message'];
  $time         = date("Y-m-d H:m:s");
  $update       = date("Y-m-d H:m:s");

  $dsn  ='mysql:dbname=inquiryform;host=localhost';
  $name = '';
  $pass = '';

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>登録画面</title>
  <link rel="stylesheet" href="regist.css">
</head>
<body>

  <h1>送信完了</h1>
  <h2>お問合せありがとうございます!!!!</h2>
  <div class="content">
    <a href="toppage.php">ホームに戻る</a>
  </div>
  
</body>
</html>