<?php

namespace Lantency;

use Lantency\Events\LatencyEventServiceProvider;
use Lantency\Contracts\LogOperation;
use Lantency\Loggers\DatabaseLogger;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class LatencyServiceProvider extends ServiceProvider
{

    public function boot()
    {

        $this->publishes([
            __DIR__ . './../config/latency.php' => config_path('latency.php'),
        ], 'config');

        $this->publishes([
            __DIR__ . '/migrations' => base_path('database/migrations'),
        ], 'migrations');


        $this->mergeConfigFrom(  __DIR__ . '/../config/latency.php' , 'latency' );


        $this->app->bind(LogOperation::class, config('latency.logger_concrete'));


        $this->loadMigrationsFrom(  __DIR__ . '/migrations');
    }

    public function register()
    {

        LatencyFacade::shouldProxyTo(LatencyBaseClass::class);

        AliasLoader::getInstance()->alias('Latency', LatencyFacade::class);

        $this->app->register(LatencyEventServiceProvider::class);

    }

}
