<?php 

  session_start();
  require_once('controller/comfirmController.php');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/stylesheet.css">
  <title>Document</title>
</head>
<body>

<header>
    <h1 id="title">お問い合わせ</h1>
  </header>
  <main>
    <p id="second_title">*お問い合わせフォーム*</p>
    <div class="container">
      <form method="POST" action="regist.php">
        <div class="item">
          <label id="lab" for="name">氏名:</label> <p id="ph_name"><?php echo $name  ?></p>
        </div>
        <div class="item">
          <label for="email">メールアドレス:</label> <p id="ph_email" ><?php echo $email ?></p>
        </div>
        <div class="item">
          <label for="message">お問い合わせ内容:</label><p id="ph_textarea" ><?php echo $message ?></p>
        </div>
        <div class="btn-area">
        <div class="conteiner">
        <a id="back" href="index.php">戻る</a>
        <input id="send" type="submit" name="btn_confrm" value="送信する">
        </div>
        </div>
      </form>
    </div>
  </main>

</body>
</html>