<?php

use App\Http\Controllers\Authen\AuthController;
use App\Http\Controllers\Client\ClientController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/authen/register', [AuthController::class, 'register'])->name('authen.register');
Route::post('/authen/register',[AuthController::class, 'check_register']);

Route::get('/authen/login', [AuthController::class, 'login'])->name('authen.login');
Route::post('/authen/login', [AuthController::class, 'check_login']);

Route::get('/authen/logout', [AuthController::class, 'logout'])->name('authen.logout');

Route::group(['prefix' => 'authen'], function() {
});

Route::group(['prefix' => 'client'], function() {
    Route::get('/', [ClientController::class, 'home'])->name('client.home');
    Route::get('/shop', [clientController::class, 'shop'])->name('client.shop');
    Route::get('/blog', [clientController::class, 'blog'])->name('client.blog');
    Route::get('/about', [clientController::class, 'about'])->name('client.about');
    Route::get('/contact', [clientController::class, 'contact'])->name('client.contact');
});