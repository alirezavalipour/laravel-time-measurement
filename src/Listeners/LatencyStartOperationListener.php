<?php

namespace Lantency\Listeners;

use Lantency\Events\LatencyStartEvent;
use Lantency\LatencyFacade;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LatencyStartOperationListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  LatencyStartEvent  $event
     * @return void
     */
    public function handle(LatencyStartEvent $event)
    {
        LatencyFacade::start();
    }
}
