<?php

use Illuminate\Support\Facades\Route;
//role management
use App\Http\Controllers\RoleController;
//user management
use App\Http\Controllers\UserController;

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

/*
|----------------------------------------------------------------
| Role Management
|----------------------------------------------------------------
*/
//Route::resource('/roles', RoleController::class);
//showメソッドを使用しないのでshowを除く
Route::resource('/roles', RoleController::class, ['except' => ['show']]);
/*
//下記のCommand処理が含まれる
Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');
Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');
Route::get('/roles/{role}', [RoleController::class, 'show'])->name('roles.show');
Route::get('/roles/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit');
Route::patch('/roles/{role}', [RoleController::class, 'update'])->name('roles.update');
Route::delete('/roles/{role}', [RoleController::class, 'destroy'])->name('roles.destroy');
*/

/*
|----------------------------------------------------------------
| User Management
|----------------------------------------------------------------
*/
//Route::resource('/users', UserController::class);
//showメソッドを使用しないのでshowを除く
Route::resource('users', UserController::class, ['except' => ['show']]);

//下記のCommand処理が含まれる
/*Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::get('users/create', [UserController::class, 'create'])->name('users.create');
Route::post('users', [UserController::class, 'store'])->name('users.store');
Route::get('users/{user}', [UserController::class, 'show'])->name('users.show');
Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::patch('users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
*/

