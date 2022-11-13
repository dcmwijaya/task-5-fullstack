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


Auth::routes();
Route::get('/', [App\Http\Controllers\MenuController::class, 'index'])->name('index');
Route::get('/login', [App\Http\Controllers\MenuController::class, 'login'])->name('login');
Route::get('/home', [App\Http\Controllers\ArticlesController::class, 'index'])->name('home');
Route::get('/edit', [App\Http\Controllers\ArticlesController::class, 'edit_profile'])->name('edit_profile');