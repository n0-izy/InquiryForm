<?php
// ここで環境定義ファイルを読み込む
  // localhostディレクトリ内にデフォルトと異なる環境の定義ファイルが用意されている時
  if (file_exists('/env/localhost/define.php')) {
    require_once(dirname(__FILE__) . './../env/localhost/define.php');
  // デフォルトの定義ファイルを読み込む
  } else {
    require_once(dirname(__FILE__) . './../env/define_example.php');
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