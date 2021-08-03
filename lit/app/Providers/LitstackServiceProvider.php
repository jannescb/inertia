<?php

namespace Lit\Providers;

use Ignite\Crud\Fields\Route;
use Illuminate\Support\ServiceProvider;

class LitstackServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(lit_resource_path('views'), 'lit');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Route::register('app', function ($collection) {
            $collection->route('Home', 'home', fn ($locale) => __route('home'));
            $collection->route('About', 'about', fn ($locale) => __route('about'));
        });
    }
}
