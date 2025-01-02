<?php
// routes/web.php
use Illuminate\Support\Facades\Route;
// hello画面への遷移
Route::get('/hello', function () {
    return view('hello', ['displayString' => 'hello']);
});
// ユーザ新規登録画面への遷移
Route::get('/createuser', function () {
    return view('createuser');
});