<?php

namespace App\Modules;

use App\Modules\FrontEnd\SinglePageServiceProvider;
use Illuminate\Support\ServiceProvider;

class ModulesServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(SinglePageServiceProvider::class);
    }
}
