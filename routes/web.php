<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
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


Route::group(['prefix' => 'authen'], function() {
    Route::get('/register', [AuthController::class, 'register'])->name('authen.register');
    Route::post('/register',[AuthController::class, 'check_register']);
    
    Route::get('/login', [AuthController::class, 'login'])->name('authen.login');
    Route::post('/login', [AuthController::class, 'check_login']);
    
    Route::get('/logout', [AuthController::class, 'logout'])->name('authen.logout');

    Route::get('/profile',[AuthController::class, 'profile'])->name('authen.profile');
    Route::post('/profile',[AuthController::class, 'check_profile']);

    Route::get('/change_password',[AuthController::class, 'change_password'])->name('authen.change_password');
    Route::post('/change_password',[AuthController::class, 'check_change_password']);

    Route::get('/forgot_password',[AuthController::class, 'forgot_password'])->name('authen.forgot_password');
    Route::post('/forgot_password',[AuthController::class, 'check_forgot_password']);

    Route::get('/reset_password',[AuthController::class, 'reset_password'])->name('authen.reset_password');
    Route::post('/reset_password',[AuthController::class, 'check_reset_password']);

});

Route::group(['prefix' =>'admin'], function() {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::resources([
        'user' => UserController::class,
        'category'=> CategoryController::class,
        'product'=> ProductController::class
    ]);
});

Route::group(['prefix' => 'client'], function() {
    Route::get('/', [ClientController::class, 'home'])->name('client.home');
    Route::get('/blog', [clientController::class, 'blog'])->name('client.blog');
    Route::get('/about', [clientController::class, 'about'])->name('client.about');
    Route::get('/contact', [clientController::class, 'contact'])->name('client.contact');
    
    Route::group(['prefix' => 'shop'],function(){
        Route::get('/', [clientController::class, 'shop'])->name('client.shop');
        Route::get('/category/{cat}', [ClientController::class, 'category'])->name('client.category');

        Route::get('product/{product}', [ClientController::class, 'product'])->name('client.product');

    });

});