<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ClaimRequest implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $username;

    public $message;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($username)
    {
        //
        $this->username = $username;
        $this->message  = "{$username} accepted your bid on their product! Please Proceed To Sell It";
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
         return ['claim-request'];
        // return new PrivateChannel('channel-name');
    }
}
