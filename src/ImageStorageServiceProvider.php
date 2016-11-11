<?php namespace Vis\ImageStorage;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\Finder\Finder;

class ImageStorageServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__ . '/../vendor/autoload.php';

        $this->setupRoutes($this->app->router);

        $this->loadViewsFrom(realpath(__DIR__ . '/resources/views'), 'image-storage');

        $this->publishes([
            __DIR__ . '/published' => public_path('packages/vis/image-storage'),
            __DIR__ . '/config' => config_path('image-storage/')
        ], 'image-storage');

/*        $this->publishes([
            realpath(__DIR__.'/Migrations') => $this->app->databasePath().'/migrations',
        ]);
*/
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router $router
     *
     * @return void
     */
    public function setupRoutes(Router $router)
    {
        if (!$this->app->routesAreCached()) {
            require __DIR__ . '/Http/routers.php';
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }

    public function provides()
    {
    }
}



