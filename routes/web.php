<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/
/*
|----------------------------------------------------------------
| Login
|----------------------------------------------------------------
*/
Route::get('/', function () {
    return view('auth/login');
});


Auth::routes();

//Loginした状態で再Loginした場合のリダイレクト処理
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

//未ログインの際に強制的にログイン画面に遷移する
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



