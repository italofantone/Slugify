<?php

namespace Italomoralesf\Slugify\Bridge\Laravel;

use Italomoralesf\Slugify\Slugify;

use Illuminate\Support\ServiceProvider;

class SlugifyServiceProvider extends ServiceProvider
{

	/**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    	//
    }

	/**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('slugify', function () {
            return new Slugify();
        });
    }

}