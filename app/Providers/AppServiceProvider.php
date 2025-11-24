<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;
use App\Models\Menu;
use App\Models\sidebar;


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
        View::composer('*', function($view){
        $view->with('menus', Sidebar::orderBy('order', 'asc')->get());
    });

        View::composer('layouts.main', function ($view) {
            $view->with('menus', Menu::where('is_active', 1)->orderBy('id', 'asc')->get());
        });

    }
}
