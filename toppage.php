<?php
  require_once(dirname(__FILE__). '/controller/HomeController.php');
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