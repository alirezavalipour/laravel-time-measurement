<?php

namespace Lantency\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class LatencyFinishEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $source;
    public $description;


    public function __construct($source, $description)
    {
        $this->source      = $source;
        $this->description = $description;
    }


    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
