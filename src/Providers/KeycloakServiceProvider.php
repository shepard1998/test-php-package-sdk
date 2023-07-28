<?php

namespace Shepard41\TestPackageSdk\Providers;

use Illuminate\Auth\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;

class KeycloakServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //$this->publishes([__DIR__.'/../config/keycloak.php' => 'config/keycloak.php'], 'config');
        //$this->mergeConfigFrom(__DIR__.'/../config/keycloak.php', 'keycloak');
    }

    public function register()
    {
        Auth::extend('keycloak', function ($app, $name, array $config) {
            return new KeycloakG(Auth::createUserProvider($config['provider']), $app->request);
        });
    }
}
