<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class AnswerPosted implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    public $new_message;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($new_message)
    {
        $this->new_message = $new_message;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        // return new PrivateChannel('mypusherapp.'.$this->new_message->visitor_id);
        return new Channel('mypusherapp.'.$this->new_message->visitor_id);
    }
}
