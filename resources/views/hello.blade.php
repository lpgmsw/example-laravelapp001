<?php
// filepath: /home/stdlpcskup/Laravel-Project/example-laravelapp001/resources/views/hello.blade.php
/**
 * ユーザの新規登録ページ
 * helloページに設置されている新規登録ボタンをクリックすることで遷移できる
 */
?>
<!doctype html>
<html>
  <body>
    <h3>{{$displayString}}</h3>
    <button onclick="window.location.href='/createuser'">新規登録</button>
  </body>
</html>