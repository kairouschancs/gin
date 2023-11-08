<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;//role management
use App\Http\Controllers\UserController;//user management
use App\Http\Controllers\EmployeeController;//employee management
use App\Http\Controllers\ShopTypeController;//shop_type management:業態登録
use App\Http\Controllers\WorkingHourController;//working_hour management:理論労働時間算出係数登録



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
Route::resource('/roles', RoleController::class, ['except' => ['show']])->middleware('auth');
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
Route::resource('users', UserController::class, ['except' => ['show']])->middleware('auth');

/*
|----------------------------------------------------------------
| Employee Management
|----------------------------------------------------------------
*/
Route::get('em', [EmployeeController::class, 'index'])->name('employees.index')->middleware('auth');
Route::get('em/create', [EmployeeController::class, 'create'])->name('employees.em_create')->middleware('auth');
Route::post('em', [EmployeeController::class, 'store'])->name('employees.em_store')->middleware('auth');
//Route::get('em/{user}', [EmployeeController::class, 'show'])->name('employees.show')->middleware('auth');
Route::get('em/{user}/edit', [EmployeeController::class, 'edit'])->name('employees.em_edit')->middleware('auth');
Route::patch('em/{user}', [EmployeeController::class, 'update'])->name('employees.em_update')->middleware('auth');
Route::get('/delete/{id}', 'App\Http\Controllers\EmployeeController@delete')->name('em_delete');
Route::delete('em/{user}', [EmployeeController::class, 'destroy'])->name('employees.em_destroy')->middleware('auth');



/*
|----------------------------------------------------------------
| Shop Management
|----------------------------------------------------------------
*/
//+++++++++++++++++++++++
//Shop_types
//+++++++++++++++++++++++
//showメソッドを使用しないのでshowを除く
Route::resource('shop_types', ShopTypeController::class, ['except' => ['show']])->middleware('auth');

//+++++++++++++++++++++++
//working_hours
//+++++++++++++++++++++++
//showメソッドを使用しないのでshowを除く
Route::resource('working_hours', WorkingHourController::class, ['except' => ['show']])->middleware('auth');

