<?php

namespace App\Modules\FrontEnd\Providers;

use Illuminate\Routing\Router;

class RouteServiceProvider extends \App\Providers\RouteServiceProvider
{

    /**
     * Define the routes for the application.
     */
    public function map()
    {
        \Route::group(['namespace' => 'App\Modules\FrontEnd\Http\Controllers'],
            function ($router) {
                $router->get('{one?}/{two?}/{three?}/{four?}/{five?}/{six?}/',
                    'SinglePageController@index');
            });
    }

    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'single-page');
    }
}
