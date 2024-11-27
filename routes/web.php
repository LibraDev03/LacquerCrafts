<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Authen\AuthController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\CheckoutController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Client\PaymentsController;
use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\search;

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

    Route::get('/reset_password/{token}',[AuthController::class, 'reset_password'])->name('authen.reset_password');
    Route::post('/reset_password/{token}',[AuthController::class, 'check_reset_password']);

    Route::get('/myaccount', [AuthController::class , 'myaccount'])->name('authen.myaccount');

});

Route::group(['prefix' =>'admin'], function() {

    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::resources([

        'user' => UserController::class,

        'category'=> CategoryController::class,

        'product'=> ProductController::class,

        'blog' => BlogController::class

    ]);
    // Route::get('/destroyImage/{image}', [ProductController::class, 'destroyImage'])->name('admin.destroyImage');

    Route::get('/order', [OrderController::class, 'order'])->name('admin.order');
    Route::get('/detail/{order}', [OrderController::class, 'detail'])->name('admin.detail');
});

Route::group(['prefix' => 'client'], function() {

    Route::get('/', [ClientController::class, 'home'])->name('client.home');
    Route::get('/quickview/{product}', [ClientController::class, 'quickview'])->name('client.quickview');

    Route::get('/search', [ClientController::class, 'search'])->name('client.search');

    Route::group(['prefix' => 'content'],function(){

    Route::get('/', [ClientController::class, 'content'])->name('client.blog');

    Route::get('/blog_detail/{blog}', [ClientController::class, 'blog_detail'])->name('client.blog_detail');

    });

    Route::get('/about', [clientController::class, 'about'])->name('client.about');

    Route::get('/contact', [clientController::class, 'contact'])->name('client.contact');
    
    Route::group(['prefix' => 'shop'],function(){

        Route::get('/', [clientController::class, 'shop'])->name('client.shop');

        Route::get('/category/{cat}', [ClientController::class, 'category'])->name('client.category');

        Route::get('product/{product}', [ClientController::class, 'product'])->name('client.product');

        Route::post('/comment/{product}', [ClientController::class, 'comment'])->name('client.comment');
        Route::delete('/comment/{id}', [ClientController::class, 'delete_comment'])->name('client.comment_delete');

    });

    Route::group(['prefix' => 'cart'], function(){

        Route::get('/', [CartController::class, 'cart'])->name('client.cart');
        Route::get('/add/{product}', [CartController::class, 'add_cart'])->name('client.add_cart');
        Route::get('/delete/{product}', [CartController::class, 'delete_cart'])->name('client.delete_cart');
        Route::get('/update/{product}', [CartController::class, 'update_cart'])->name('client.update_cart');
        Route::get('clear', [CartController::class, 'clear'])->name('client.clear');

    });

    Route::get('/favorite/{product}', [clientController::class, 'favorite'])->name('client.favorite');
    Route::get('/wishlist', [ClientController::class, 'wishlist'])->name('client.wishlist');
    Route::get('/clear_wishlish', [ClientController::class, 'clear_wishlish'])->name('client.clear_wishlish');

    Route::group(['prefix' => 'order'], function() {
        Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('client.checkout');
        Route::post('/checkout', [CheckoutController::class, 'post_checkout']);
        Route::get('/history', [CheckoutController::class, 'history'])->name('client.history');
        Route::get('/order_detail/{order}', [CheckoutController::class, 'order_detail'])->name('client.detail');
    });

    Route::group(['prefix' => 'payments'], function() {
        Route::post('/vnpay_payments', [PaymentsController::class, 'vnpay_payments'])->name('client.vnpay_payments');
    });

});