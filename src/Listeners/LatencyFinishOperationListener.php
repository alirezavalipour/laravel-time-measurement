<?php

namespace Lantency\Listeners;

use Lantency\Events\LatencyFinishEvent;
use Lantency\LatencyFacade;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LatencyFinishOperationListener
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
     * @param LatencyFinishEvent $event
     *
     * @return void
     */
    public function handle(LatencyFinishEvent $event)
    {
        LatencyFacade::finish();
    }
}
