<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TodoController;
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


/* todo routes */

Route::get('/', [TodoController::class, "index"])->name('todo');
Route::get('/create', [TodoController::class, 'create'])->name('createtodo');
Route::post('/create', [TodoController::class, 'store'])->name('storetodo');
Route::get('/edit/{id}', [TodoController::class, 'edit'])->name('edittodo');
Route::POST('/update/{id}', [TodoController::class, 'update'])->name('updatetodo');
Route::get('/delete/{id}', [TodoController::class, 'destroy'])->name('deletetodo');

/* Auth Login */

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('loginpost');

/* register */

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('registerpost');

/* forgot password */

Route::get('/forget-password', [AuthController::class, 'showForgetPasswordForm'])->name('forgetPassword');
Route::post('/forget-password', [AuthController::class, 'forgetPassword'])->name('forgetPasswordPost');
