<?php

namespace Lantency\Events;

use Lantency\Events\LatencyStartEvent;
use Lantency\Events\LatencyFinishEvent;
use Lantency\Listeners\LatencyStartOperationListener;
use Lantency\Listeners\LatencyFinishOperationListener;
use Lantency\Listeners\LatencySaveOperationListener;


use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class LatencyEventServiceProvider extends ServiceProvider
{
    protected $listen = [
        LatencyStartEvent::class  => [LatencyStartOperationListener::class],
        LatencyFinishEvent::class => [LatencyFinishOperationListener::class , LatencySaveOperationListener::class],
    ];

    public function boot()
    {
        parent::boot();
    }
}
