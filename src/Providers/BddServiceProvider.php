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
            __DIR__.'/../assets/features' => base_path('features'),
            __DIR__.'/../assets/config' => base_path(''),
        ]);
    }
}