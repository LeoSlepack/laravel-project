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

Route::get('/home', function () {
    return view('welcome');
});

Auth::routes();


// Views Responsáveis pela paerte de usuários
Route::get('/usuarios/adicionar', [App\Http\Controllers\UsersController::class, 'create'])->name('user.create');
Route::post('/usuarios/adicionar', [App\Http\Controllers\UsersController::class, 'store'])->name('user.store');
Route::get('/users', [App\Http\Controllers\UsersController::class, 'index'])->name('user.index');
Route::get('/users/{user}', [App\Http\Controllers\UsersController::class, 'show'])->name('user.show');
Route::get('/edit/{id}', [App\Http\Controllers\UsersController::class, 'edit'])->name('user.edit');
Route::put('/usuario/update/{id}',[App\Http\Controllers\UsersController::class, 'update'])->name('user.update');
Route::delete('/user/delete/{id}',[App\Http\Controllers\UsersController::class, 'destroy'])->name('user.destroy');

///Views responsáveis pela parte dos quizzes
Route::get('/index', function () {
    return view('quiz.index');
});
Route::get('/homequiz', [App\Http\Controllers\QuizController::class, 'index'])->name('homequiz.index');
Route::get('/homequiz/create', [App\Http\Controllers\QuizController::class, 'create'])->name('homequiz.create');
Route::get('/homequiz/{id}', [App\Http\Controllers\QuizController::class, 'show'])->name('homequiz.show');
Route::post("/homequiz",[App\Http\Controllers\QuizController::class, 'store'])->name('homequiz.store');
Route::delete('/homequiz/{id}', [App\Http\Controllers\QuizController::class, 'destroy'])->name('homequiz.destroy');






