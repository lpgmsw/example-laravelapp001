<?php
/**
 * ユーザ情報の編集ページ
 * helloページに設置されている編集ボタンをクリックすることで遷移できる
 * ユーザ情報を編集する
 */
?>
<!doctype html>
<html>
  <body>
    <h3>ユーザ情報編集</h3>
    <form action="/updateuser/{{ $user->user_id }}" method="POST">
      @csrf
      <label for="user_id">ID:</label>
      <input type="text" id="user_id" name="user_id" value="{{ $user->user_id }}" readonly><br>
      <label for="userName">ユーザ名:</label>
      <input type="text" id="userName" name="userName" value="{{ $user->userName }}" required><br>
      <label for="userNickname">ニックネーム:</label>
      <input type="text" id="userNickname" name="userNickname" value="{{ $user->userNickname }}" required><br>
      <label for="gender">性別:</label>
      <input type="radio" id="male" name="gender" value="男" {{ $user->gender == '男' ? 'checked' : '' }} required>
      <label for="male">男</label>
      <input type="radio" id="female" name="gender" value="女" {{ $user->gender == '女' ? 'checked' : '' }} required>
      <label for="female">女</label><br>
      <label for="age">年齢:</label>
      <input type="number" id="age" name="age" value="{{ $user->age }}" required><br>
      <button type="submit">更新</button>
    </form>
    <button onclick="window.location.href='/hello'">戻る</button>
  </body>
</html>