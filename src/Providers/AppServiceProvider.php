<?php

namespace App\Providers;

use App\Singleton\SingletonTokenApp;
use Illuminate\Support\ServiceProvider;
use Closure;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SingletonTokenApp::class, function (){
            return new SingletonTokenApp();
        });
    }
    public function booting(Closure $callback)
    {
        parent::booting($callback); // TODO: Change the autogenerated stub
    }
}