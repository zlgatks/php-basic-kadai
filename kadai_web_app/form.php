<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta chartset="utf-8">
    <title>社員情報入力フォームの作成</title>
  </head>
  <body>
    <h2>社員情報入力フォーム</h2>
    <form action="confirm.php" method="post">
      <table>
        <tr>
          <td>社員名</td>
          <td>
            <input type="text" name="employee_name">
          </td>
        </tr>
        <tr>
          <td>年齢</td>
          <td>
            <input type="text" name="employess_age">
          </td>
        </tr>
        <tr>
          <td>所属部署</td>
          <td>
            <select name="department">
              <option value="開発部">開発部</option>
              <option value="事業部">営業部</option>
              <option value="人事部">人事部</option>
            </select>
          </td>
        </tr>
      </table>
      <input type="submit" value="送信">
    </form>
  </body>
</html>