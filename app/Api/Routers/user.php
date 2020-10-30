<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Route::group([
    'domain'     => config('api.route.domain'),
    'prefix'     => config('api.route.prefix'),
    'namespace'  => config('api.route.namespace'),
    'middleware' => config('api.route.middleware'),
], function (Router $router) {

});
