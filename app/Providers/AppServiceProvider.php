<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use App\Models\Floor;
use App\Models\Material;
use App\Models\Room;
use App\Models\User;
use App\Models\CarBrand;

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
        View::composer(['inc.category', 'account.estate.create', 'account.estate.edit', 'admin.estate.store'], function($view){
            $view->with('categories', Category::all());
            $view->with('floors', Floor::all());            
            $view->with('materials', Material::all());            
            $view->with('rooms', Room::all());            
            $view->with('users', User::all());            
        });

        View::composer(['account.car.create', 'account.car.edit', 'inc.categoryCar'], function($view){
            $view->with('brands', CarBrand::all());
            $view->with('users', User::all());           
            $view->with('years', range(now()->year, now()->year - 20));           
        });

        Paginator::useBootstrap();

    }
}
