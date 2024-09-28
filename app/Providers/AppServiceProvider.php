<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // truyền dữ liệu ra toàn bộ hệ thống (coi là biến toàn cục global)
        view()->composer('*', function($view){
            $cate = Category::orderBy('name', 'DESC')->get();

            // compac sang để sử dụng những biến trên
            $view->with(compact('cate'));
        });
    }
}
