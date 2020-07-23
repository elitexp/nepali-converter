<?php

namespace Elitexp\NepaliConverter;

use Illuminate\Support\ServiceProvider;

/**
 * Class NepaliConverterServiceProvider
 * @package Elitexp\NepaliConverter
 */
class NepaliConverterServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
      $this->registerServices();


    }





    /**
     * Register Invoices' services in the container.
     *
     * @return void
     */
    protected function registerServices()
    {
        $this->app->singleton(NepaliConverter::class, function ($app) {
            return new NepaliConverter();
        });
    }



    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [NepaliConverter::class];
    }
}
