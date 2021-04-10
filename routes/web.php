<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\SessionMiddleware;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AccountController;
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

Route::get('/', [ GuestController::class, 'home']);
Route::get('/{id}/detail', [ GuestController::class, 'detail'])->name("home.detail");
Route::get('/news', [ GuestController::class, 'news']);
Route::get('/blog', [ GuestController::class, 'blog']);
Route::get('/register', [ GuestController::class, 'register'])->name('register');
Route::post('/register', [ GuestController::class, 'registerStore'])->name('register.store');
Route::get('/login', [ GuestController::class, 'login'])->name("login");
Route::post('/login', [ GuestController::class, 'loginAuth'])->name("login.auth");
Route::get('/logout', [ GuestController::class, 'logout'])->name("logout");

Route::resource('/story', StoryController::class)->middleware(SessionMiddleware::class);
Route::get('/account', [AccountController::class, 'detail'])->middleware(SessionMiddleware::class);
Route::put('/account/{id}', [AccountController::class, 'update'])->name('account.update')->middleware(SessionMiddleware::class);
