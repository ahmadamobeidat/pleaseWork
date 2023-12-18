<?php

namespace DevLabs\Newscrud;

use Illuminate\Support\ServiceProvider;

class NewscrudServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/path_to_config/config_file.php' => config_path('newscrud.php'),
        ], 'config');

        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->loadMigrationsFrom(__DIR__ . '/migrations');
        $this->loadViewsFrom(__DIR__ . '/views', 'newscrud');
        $this->publishes([
            __DIR__ . '/views' => base_path('resources/views/devlabs/newscrud'),
        ], 'views');
        $this->loadTranslationsFrom(__DIR__ . '/path_to_lang', 'newscrud');
        $this->publishes([
            __DIR__ . '/path_to_lang' => resource_path('lang/vendor/newscrud'),
        ], 'translations');
    }


    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('DevLabs\Newscrud', function ($app) {
            return new \DevLabs\Newscrud\NewsAdminBackendController();
        });
    }
}
