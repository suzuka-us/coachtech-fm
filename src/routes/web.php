<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

// トップページ（welcome）
Route::get('/', function () {
    return view('welcome');
});

// 会員登録
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

// ログイン
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

Route::middleware('auth')->group(function () {     Route::get('/', [AuthController::class, 'index']);
 });