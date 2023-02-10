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

Route::get('/', [App\Http\Controllers\UsersController::class, 'index']);
Route::get('/{id}', [App\Http\Controllers\UsersController::class, 'show'])->name('user.show');
Route::get('/edit/{id}', [App\Http\Controllers\UsersController::class, 'edit'])->name('user.edit');