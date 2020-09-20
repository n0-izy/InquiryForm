<?php 

  $dsn  ='mysql:dbname=inquiryform;host=localhost';
  $name = '00000';
  $pass = '00000000000';
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
  <style>
  *{
    margin: 0;
    padding: 0;
  }
  h1{
    margin: 0 0 50px 0;
    padding: 20px;
    text-align: center;
    border: solid 3px;
  }
  h2{
    text-align: center;
    margin-bottom: 20px;
  }
  .content1{
    width: 80%;
    margin: 0 auto;
  }
  
  .content{
    border: solid 3px #000;
    border-radius: 10px;
    border-color: #ffe4e1;
    width: 80%;
    font-size: 20px;
    font-weight: bold;
    color: #ffdead;
    margin: 0 auto;
  }

  .apoj{
    width: 65%;
    margin: 0 auto;
  }
  a{
    background: #add8e6;
    padding: 10px;
    display: inline-block;
    border-radius: 10px;
    text-decoration: none;
    font-weight: bold;
  }
  </style>
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