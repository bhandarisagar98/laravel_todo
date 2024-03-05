<?php

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


Route::get('/', [TodoController::class, "index"])->name('todo');
Route::get('/create', [TodoController::class, 'create'])->name('createtodo');
Route::post('/create', [TodoController::class, 'store'])->name('storetodo');
Route::get('/edit/{id}', [TodoController::class, 'edit'])->name('edittodo');
Route::POST('/update/{id}', [TodoController::class, 'edit'])->name('updatetodo');
Route::get('/delete/{id}', [TodoController::class, 'destroy'])->name('deletetodo');
