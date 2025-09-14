<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\View;
use App\Models\Menu;
>>>>>>> 435a7c3 (landing web promosi)

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
<<<<<<< HEAD
        //
=======
        View::composer('layouts.main', function ($view) {
            $view->with('menus', Menu::where('is_active', 1)->orderBy('id', 'asc')->get());
        });
>>>>>>> 435a7c3 (landing web promosi)
    }
}
