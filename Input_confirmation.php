
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="stylesheet.css">
  <title>Document</title>
</head>
<body>
<header>
    <h1 id="title">お問い合わせ</h1>
  </header>

  <main>
    <p id="second_title">*お問い合わせフォーム*</p>
    <div class="container">
      <form method="POST" action="Input_confirmation.php">
        <div class="item">
          <label id="lab" for="your_name">氏名:</label> <p id="ph_name"><?php echo $_POST['name']; ?></p>
        </div>
        <div class="item">
          <label for="email">メールアドレス:</label> <p id="ph_email" ><?php echo $_POST['email']; ?></p>
        </div>
        <div class="item">
          <label for="message">お問い合わせ内容:</label><p id="ph_textarea" ><?php echo $_POST['message']; ?></p>
        </div>
        
        <div class="btn-area">
          <input type="submit" name="btn_confrm" value="確認する">
        </div>
      </form>
    </div>
  </main>
</body>
</html>