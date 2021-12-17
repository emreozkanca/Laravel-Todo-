<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodolistController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/index', [TodolistController::class, 'index'])->name('index');
Route::post('/index', [TodolistController::class, 'store'])->name('store');
Route::get('/todo/{todolist:id}', [TodolistController::class, 'edit'])->name('edit');
Route::delete('/{todolist:id}', [TodolistController::class, 'destroy'])->name('destroy');
Route::post('/update/{todolist:id}', [TodolistController::class, 'update'])->name('update');
Route::resource('/todo', TodolistController::class);
Route::get('/search', [TodolistController::class, 'search'])->name('search');
Route::get('/admin', [TodolistController::class, 'admin'])->name('admin');

require __DIR__.'/auth.php';
