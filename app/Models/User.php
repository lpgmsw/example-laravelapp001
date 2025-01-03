<?php

namespace App\Models;

// モデルクラスを継承
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Userモデルクラスを作成
class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'userName',
        'userNickname',
        'gender',
        'age',
        'valid',
    ];
}