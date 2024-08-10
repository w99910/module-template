<?php

namespace ThomasBrillion\Module;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Support\ServiceProvider;

class UseItServiceProvider extends ServiceProvider
{
    /**
     * @throws BindingResolutionException
     */
    public function boot(): void
    {
        // if ($this->app->make('config')->get('', true)) {
        //     $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        // }

        // $this->publishesMigrations([
        //     __DIR__ . '/../database/migrations' => database_path('migrations'),
        // ]);

        // $this->publishes([
        //     __DIR__ . '/../config/.php' => $this->app->configPath('package.php'),
        // ], 'package name');

        // Register middleware
        // $router = $this->app->make('router');
        // if ($router && method_exists($router, 'aliasMiddleware')) {
        //     $router->aliasMiddleware('alias-middleware', Middleware::class);
        // }
    }
}
