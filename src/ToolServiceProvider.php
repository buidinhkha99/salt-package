<?php

namespace Bcs\Salt;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Facade;
use Salt\Nova\Http\Middleware\HandleInertiaRequests;
use Inertia\ServiceProvider as InertiaServiceProvider;

class ToolServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // TODO: set up package the same Nova service
        // Route::bind('entity', function ($entity) {
        //     return Facade::guestEntity($entity);
        // });

        // Nova::script('salt-nova', __DIR__.'/../public/js/app.js');
        // Nova::style('salt-nova', __DIR__.'/../public/css/app.css');

        // $this->app->register(InertiaServiceProvider::class);
        // $this->app->router->aliasMiddleware('salt.inertia', HandleInertiaRequests::class);

        // $this->loadViewsFrom(__DIR__ . '/../resources/views', 'salt');
        // $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        // publishes view files
        $this->publishes([
            __DIR__.'/../resources/js/components' => base_path('resources/js/components'),
        ], 'salt');

        $this->publishes([
            __DIR__.'/../resources/js/shared' => base_path('resources/js/shared'),
        ], 'salt');

        // publishes controller files
        $this->publishes([
            __DIR__.'/../src/Screens' => base_path('app/Screens'),
        ], 'salt');

    }

}
