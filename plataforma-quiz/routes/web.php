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

Auth::routes();

Route::get('/usuarios/adicionar', [App\Http\Controllers\UsersController::class, 'create'])->name('user.create');
Route::post('/usuarios/adicionar', [App\Http\Controllers\UsersController::class, 'store'])->name('user.store');
Route::get('/', [App\Http\Controllers\UsersController::class, 'index'])->name('user.index');
Route::get('/{id}', [App\Http\Controllers\UsersController::class, 'show'])->name('user.show');
Route::get('/edit/{id}', [App\Http\Controllers\UsersController::class, 'edit'])->name('user.edit');
Route::put('/usuario/update/{id}',[App\Http\Controllers\UsersController::class, 'update'])->name('user.update');
Route::delete('/user/delete/{id}',[App\Http\Controllers\UsersController::class, 'destroy'])->name('user.destroy');