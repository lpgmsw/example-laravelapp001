<?php
// filepath: /home/stdlpcskup/Laravel-Project/example-laravelapp001/resources/views/createuser.blade.php
/**
 * ユーザの新規登録ページ
 * helloページに設置されている新規登録ボタンをクリックすることで遷移できる
 * ユーザ情報を登録する
 */
?>
<!doctype html>
<html>
  <body>
    <h3>ユーザ新規登録</h3>
    <form action="/createuser" method="POST">
      @csrf
      <label for="userName">ユーザ名:</label>
      <input type="text" id="userName" name="userName" required><br>
      <label for="userNickname">ニックネーム:</label>
      <input type="text" id="userNickname" name="userNickname" required><br>
      <label for="gender">性別:</label>
      <input type="radio" id="male" name="gender" value="男" required>
      <label for="male">男</label>
      <input type="radio" id="female" name="gender" value="女" required>
      <label for="female">女</label><br>
      <label for="age">年齢:</label>
      <input type="number" id="age" name="age" required><br>
      <button type="submit">登録</button>
    </form>
    <button onclick="window.location.href='/hello'">戻る</button>
  </body>
</html>