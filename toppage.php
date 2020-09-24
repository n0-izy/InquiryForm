<?php
  // ここで環境定義ファイルを読み込む
  // localhostディレクトリ内にデフォルトと異なる環境の定義ファイルが用意されている時
  if (file_exists('env/localhost/define.php')) {
    require_once(dirname(__FILE__) . '/env/localhost/define.php');
  // デフォルトの定義ファイルを読み込む
  } else {
    require_once(dirname(__FILE__) . '/env/define_example.php');
  }

  $dsn  ='mysql:dbname=inquiryform;host=localhost';
  $name = PHPMYADMIN_USER;
  $pass = PHPMYADMIN_PASSWORD;

   try{
    $dbh = new PDO($dsn, $name, $pass);
    $sql = 'SELECT * FROM contacts ORDER BY id DESC LIMIT 2';
    $stmt = $dbh->query($sql);

  } catch (PDOExcetion $e){
    echo '接続失敗です'. $e->getMessage();
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/toppage.css">
</head>
<body>

  <h1>お問合せ</h1>
  <h2>お問合せホーム</h2>
  <div class="content1">
    <p><?php 
    foreach($stmt as $row) {
      echo '<div class="content">'.
      $row['created'].
      '<br>'.
      $row['user_name'].
      '<br>'.
      $row['contact_message'].
      '</div>';
      echo '<br>';
    }
    ?></p>
    </div>
    <div class="apoj">
      <a href="index.php">問い合わせする</a>
    </div>
    
</body>
</html>