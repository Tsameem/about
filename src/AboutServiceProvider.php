<?php

namespace Tsameem\About;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AboutServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         $this->publishes([
            // publishing all views
            __DIR__.'/views' => base_path('resources/views/tsameem'),
            // publishing all controllers
            __DIR__.'/controllers' => base_path('app/Http/Controllers'),
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__ . '/routes/routes.php';
    }
}
