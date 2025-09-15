<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
use Illuminate\Support\Facades\View;
use App\Models\Menu;
=======

use Illuminate\Support\Facades\View;
use App\Models\Menu;

>>>>>>> 61f30f0a60449b6d2279037786da386d5c582724

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

        //

        View::composer('layouts.main', function ($view) {
            $view->with('menus', Menu::where('is_active', 1)->orderBy('id', 'asc')->get());
        });

    }
}
