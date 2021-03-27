<?php


namespace SoftDD\RequestLog;


use Illuminate\Support\ServiceProvider;

class DocMakerServiceProvider  extends ServiceProvider
{
    public function boot()
    {
        $source = realpath($raw = __DIR__.'/../config/softDDDocMaker.php') ?: $raw;
        $this->publishes([$source => config_path('softDDDocMaker.php')]);

        $route = realpath($raw = __DIR__.'/../routes.php') ?: $raw;
        $this->loadRoutesFrom($route);
    }
}
