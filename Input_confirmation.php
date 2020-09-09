

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <title>お問い合わせ</title>
</head>
<body>
  <header>
    <div id="title">お問い合わせ</div>
  </header>
      <form method="post" action="Input_confirmation.php">
      <table id="containerTop">
        <tr>
          <th></th>
          <td>
            <p id="secondTitle">お問い合わせフォーム</p>
          </td>
        </tr>
        <tr>
          <th>
            氏名:
          </th>
          <td>
            <p id="inp"><?php echo $_POST['your_name']; ?></p>
          </td>
        </tr>
        <tr>
          <th>
            メールアドレス:
          </th>
          <td>
            <p id="inp"><?php echo $_POST['email']; ?></p>
          </td>
        </tr>
        <tr>
          <th>
            お問い合わせ内容:
          </th>
          <td>
            <p  id="area"><?php echo $_POST['naiyou']; ?></p>
          </td>
        </tr>
        <tr>
          <th>
            <!-- 「確認」を合わせるためにthタグ内は空 -->
          </th>
          <td>
            <input type="submit" name="btn_confirm" value="確認">
          </td>
        </tr>
      </table>
    </form>

</body>
</html>