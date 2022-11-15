<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\PrivateController;
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
Route::get('/', [PublicController::class, 'index'])->name('index');
Route::get('/login', [PublicController::class, 'login'])->name('login');
Route::get('/profile', [PrivateController::class, 'profile'])->name('profile')->middleware('auth');
Route::post('/edit_profile', [PrivateController::class, 'edit_profile'])->name('edit_profile')->middleware('auth');
Route::get('/artikel', [PrivateController::class, 'artikel'])->name('artikel')->middleware('auth');
Route::get('/arsip', [PrivateController::class, 'arsip'])->name('arsip')->middleware('auth');
Route::get('/publikasi', [PrivateController::class, 'publikasi'])->name('publikasi')->middleware('auth');
Route::get('/kategori', [PrivateController::class, 'kategori'])->name('kategori')->middleware('auth');