<?php

namespace App\ApiTester;

use App\ApiTester\Providers\RouteServiceProvider;
use Illuminate\Support\ServiceProvider;

class ApiTesterServiceProvider extends ServiceProvider
{
    /**
     * Register the see rvicprovider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
