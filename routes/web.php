<?php
// routes/web.php
use Illuminate\Support\Facades\Route;
// Requestクラスをインポート
use Illuminate\Http\Request;
// Userモデルをインポート
use App\Models\User; 
// hello画面への遷移
Route::get('/hello', function () {
    // ユーザ情報を取得
    $users = User::all();
    // 取得したユーザ情報をビューに渡す
    return view('hello', ['displayString' => 'hello', 'users' => $users]);
});
// ユーザ新規登録画面への遷移
Route::get('/createuser', function () {
    return view('createuser');
});

// ユーザ新規登録処理
Route::post('/createuser', function (Request $request) {
    // バリデーション
    $validated = $request->validate([
        'userName' => 'required|string|max:255',
        'userNickname' => 'required|string|max:255',
        'gender' => 'required|string|in:男,女',
        'age' => 'required|integer|min:0',
    ]);

    // データベースに保存
    User::create([
        'userName' => $validated['userName'],
        'userNickname' => $validated['userNickname'],
        'gender' => $validated['gender'],
        'age' => $validated['age'],
        'valid' => true,
    ]);
    // hello画面へリダイレクト
    return redirect('/hello');
});