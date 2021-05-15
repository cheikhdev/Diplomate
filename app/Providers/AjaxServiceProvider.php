<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\AjaxInterfaceRepository;
use App\Repositories\AjaxSessionRepository;

class AjaxServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(AjaxInterfaceRepository::class, AjaxSessionRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
