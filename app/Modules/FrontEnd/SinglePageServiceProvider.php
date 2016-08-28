<?php

namespace App\Modules\FrontEnd;

use App\Modules\FrontEnd\Providers\RouteServiceProvider;
use Illuminate\Support\ServiceProvider;

class SinglePageServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
