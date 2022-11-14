<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\ArticlesController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', [MenuController::class, 'index'])->name('index');
Route::get('/login', [MenuController::class, 'login'])->name('login');
Route::get('/profile', [ArticlesController::class, 'profile'])->name('profile');
Route::get('/editprofile', [ArticlesController::class, 'edit_profile'])->name('edit_profile');