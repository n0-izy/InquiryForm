<?php 
  session_start();
  $user_name    = $_SESSION['name'];
  $email        = $_SESSION['email'];
  $message      = $_SESSION['message'];
  $time         = date("Y-m-d H:m:s");
  $update       = date("Y-m-d H:m:s");


  $dsn  ='mysql:dbname=inquiryform;host=localhost';
  $name = '00000';
  $pass = '00000000000';
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
  <style>
  *{
    margin: 0;
    padding: 0;
  }
    h1{
      text-align: center;
      margin-top: 15%;
    }
    h2{
      text-align: center;
      margin-top: 5%;
    }
    .content{
      text-align: center;
    }
    a{
      display: inline-block;
      margin-top: 5%;
      padding: 10px;
      background-color:#add8e6;
      text-decoration: none;
      margin: 0 auto;
      border-radius: 10px;
    }
  </style>
</head>
<body>
  <h1>送信完了</h1>
  <h2>お問合せありがとうございます!!!!</h2>
  <div class="content">
    <a href="toppage.php">ホームに戻る</a>
  </div>
</body>
</html>