<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('todos', [TodoController::class, 'index'])->name('index');
Route::get('create-todo', [TodoController::class, 'create'])->name('create');
Route::get('todos/{id}', [TodoController::class, 'show'])->name('show');
Route::post('store-todo', [TodoController::class, 'store'])->name('store');
Route::get('{todo}/edit', [TodoController::class, 'edit'])->name('edit');
Route::post('{todo}/update-todo', [TodoController::class, 'update'])->name('update');
Route::get('{todo}/delete', [TodoController::class, 'destroy'])->name('destroy');

