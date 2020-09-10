<?php
var_dump($_POST);

$page_flag = 0;

if( !empty($_POST['btn_confirm'])) {
  $page_flag = 1;
} elseif( !empty($_POST['btn_submit']) ) {
  $page_flag = 1;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <title>Document</title>
</head>
<body>

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
            <input id="inp" type="text" name="your_name">
          </td>
        </tr>
        <tr>
          <th>
            メールアドレス:
          </th>
          <td>
            <input id="inp" type="text" name="email" value="">
          </td>
        </tr>
        <tr>
          <th>
            お問い合わせ内容:
          </th>
          <td>
            <textarea name="naiyou" id="area" cols="30" rows="10"></textarea>
          </td>
        </tr>
        <tr>
          <th>
            <!-- 「確認」を合わせるためにthタグ内は空 -->
          </th>
          <td>
            <input type="submit" name="btn_submit" value="確認">
          </td>
        </tr>
      </table>
    </form>


  
</body>
</html>