<?php 

namespace Novanova\PHPMorphy;

use Illuminate\Support\ServiceProvider;

class MorphyServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('2nova/php-morphy');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['phpmorphy'] = $this->app->share(function($app)
            {
                return new PHPMorphy;
            });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

}