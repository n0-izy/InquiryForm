<?php 
var_dump($_POST);
  $errors = array();

  if(isset($_POST['btn_submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    if($name === ""){
        $errors['name'] = "名前が入力されていません。";
        var_dump($errors['name']);
    }
    if($email === ""){
        $errors['email'] = "メールアドレスが入力されていません。";
        var_dump($errors['email']);
    }
    if($message === ""){
        $errors['message'] = "内容が入力されていません。";
        var_dump($errors['message']);
    }
}

?> 

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="stylesheet.css">
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
            if(isset($_POST['name'])){
              echo '<p id="error">';
              echo $errors['name'];
              echo '</p>';
            }
            ?>
          <label for="your_name">氏名:</label> <input id="your_name" type="text" name="name">
        </div>

        <div class="item">
        <?php 
            if(isset($_POST['email'])){
              echo '<p id="error">';
              echo $errors['email'];
              echo '</p>';
            }
            ?>
          <label for="email">メールアドレス:</label> <input id="email" type="text" name="email">
        </div>

        <div class="item">
        <?php 
            if(isset($_POST['message'])){
              echo '<p id="error">';
              echo $errors['message'];
              echo '</p>';
            }
            ?>
          <label for="message">お問い合わせ内容:</label><textarea id="message" name="message" id="" cols="30" rows="10"></textarea>
        </div>

        <div class="btn-area">
          <input type="submit" name="btn_submit" value="確認する">
        </div>
      </form>
  </main>
</body>
</html>