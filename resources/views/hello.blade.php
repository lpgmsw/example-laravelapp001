<?php
// filepath: /home/stdlpcskup/Laravel-Project/example-laravelapp001/resources/views/hello.blade.php
/**
 * ユーザの新規登録ページ
 * helloページに設置されている新規登録ボタンをクリックすることで遷移できる
 * ユーザ情報を一覧部分に表示する
 */
?>
<!doctype html>
<html>
  <body>
    <h3>{{$displayString}}</h3>
    <button onclick="window.location.href='/createuser'">新規登録</button>
    <h3>ユーザ一覧</h3>
    <table border="1">
      <thead>
        <tr>
          <th>ID</th>
          <th>ユーザ名</th>
          <th>ニックネーム</th>
          <th>性別</th>
          <th>年齢</th>
          <th>登録日時</th>
          <th>更新日時</th>
          <th>編集</th>
          <th>削除</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($users as $user)
          <tr>
            <td>{{ $user->user_id }}</td>
            <td>{{ $user->userName }}</td>
            <td>{{ $user->userNickname }}</td>
            <td>{{ $user->gender }}</td>
            <td>{{ $user->age }}</td>
            <td>{{ $user->created_at }}</td>
            <td>{{ $user->updated_at }}</td>
            <td><button onclick="window.location.href='/edituser/{{ $user->user_id }}'">編集</button></td>
            <td>
              <form action="/deleteuser/{{ $user->user_id }}" method="POST" onsubmit="return confirm('本当に削除しますか？');">
                @csrf
                <button type="submit">削除</button>
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="7">データがありません。</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </body>
</html>