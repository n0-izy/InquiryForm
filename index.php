<?php 
  session_start();
  require_once(dirname(__FILE__). './controller/inputController.php');

?> 

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/stylesheet.css">
  <title>お問い合わせ</title>
</head>
<body>

  <header>
    <h1 id="title">お問い合わせ</h1>
  </header>
  <main>
    <p id="second_title">*お問い合わせフォーム*</p>
      <form method="post" action="" >
        <div class="item">
        <?php 
            if(isset($errors['name'])){
              echo '<p id="error">';
              echo $errors['name'];
              echo '</p>';
            }
            ?>
          <label for="name">氏名:</label> <input id="name" type="text" name="name">
        </div>
        <div class="item">
        <?php 
            if(isset($errors['email'])){
              echo '<p id="error">';
              echo $errors['email'];
              echo '</p>';
            }
            ?>  
          <label for="email">メールアドレス:</label> <input id="email" type="text" name="email">
        </div>
        <div class="item">
        <?php 
            if(isset($errors['message'])){
              echo '<p id="error">';
              echo $errors['message'];
              echo '</p>';
            }
            ?>
          <label for="message">お問い合わせ内容:</label><textarea id="message" name="message" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="btn-area">
          <input type="submit"  value="確認する">
        </div>
      </form>
  </main>
  
</body>
</html>