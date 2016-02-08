<?php
namespace SimoTod\LaravelBdd\Providers;

use Illuminate\Support\ServiceProvider;

class BddServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../assets/bdd' => base_path('tests/bdd'),
            __DIR__.'/../assets/config' => base_path(''),
        ]);
    }
}