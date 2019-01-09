<?php

namespace Waygou\BrunoFalcao;

use Waygou\BrunoFalcao\Models\Post;
use Waygou\BrunoFalcao\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Waygou\BrunoFalcao\Observers\PostObserver;
use Waygou\BrunoFalcao\Observers\UserObserver;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        $this->publishAssets();

        $this->publishConfiguration();

        $this->registerCommands();

        $this->registerMigrations();

        $this->loadRoutes();

        $this->loadViews();

        $this->loadTranslations();

        $this->registerObservers();
    }

    protected function registerObservers()
    {
        User::observe(UserObserver::class);
        Post::observe(PostObserver::class);
    }


    protected function registerMigrations()
    {
        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        }
    }

    protected function loadTranslations()
    {
        // Load translations example.
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'website');
    }

    protected function loadViews()
    {
        // Load views example.
        $this->loadViewsFrom(
            __DIR__.'/../resources/views',
            'website'
        );
    }

    protected function publishConfiguration()
    {
        // Publish configuration.
        $this->publishes([
            __DIR__.'/../configuration/brunofalcao.php' => config_path('brunofalcao.php'),
        ], 'brunofalcao-configuration');

        // Merge configuration example.
        $this->mergeConfigFrom(__DIR__.'/../configuration/brunofalcao.php', 'brunofalcao');
    }

    protected function loadRoutes()
    {
        // Load Routes example.
        Route::middleware(['web', \Spatie\Csp\AddCspHeaders::class])
             ->group(__DIR__.'/../routes/web.php');
    }

    protected function publishAssets()
    {
        // Resource publish example.
        $this->publishes([
            __DIR__.'/../resources/assets/' => public_path('vendor/brunofalcao/'),
        ], 'brunofalcao-resources');
    }

    protected function registerCommands()
    {
        // Command example.
        /*
        $this->commands([
            \Laraning\Galaxia\Commands\CreateUserCommand::class,
        ]);
        */
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Middleware alias example.
        // app('router')->aliasMiddleware('galaxia-authenticate', \Laraning\Galaxia\Middleware\Authenticate::class);
    }
}
