<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// ブラウザで確認するために便宜作成　Fortifyをインストール後削除予定
Route::view('/register', 'auth.register')->name('register');

// 便宜　
Route::view('/login', 'auth.login')->name('login');

//便宜
Route::view('/', 'stamp')->name('stamp');
