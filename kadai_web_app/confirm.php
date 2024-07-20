<?php
$employee_name = $_POST['employee_name'];
$employess_age = $_POST['employess_age'];
$department = $_POST['department'];
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta chartset="utf-8">
    <title>社員情報入力フォームの作成</title>
  </head>
  <body>
    <h2>入力内容をご確認ください</h2>
    <p>問題が無ければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>

    <table border="1">
      <th>項目</th>
      <th>入力内容</th>
      <tr>
        <td>社員名</td>
        <td><?php echo $employee_name; ?></td>
      </tr>
      <tr>
        <td>年齢</td>
        <td><?php echo $employess_age; ?></td>
      </tr>
      <tr>
        <td>所属部署</td>
        <td><?php echo $department; ?></td>
      </tr>
    </table>
  </body>
  <p>
    <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
    <button id="cancel-btn" onclick="history.back();">キャンセル</button>
  </p>
</html>