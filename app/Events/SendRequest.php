<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\notifications;

class SendRequest implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
     public $username;

    public $message;
    // public $notify;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($username)
    {
        //
        $this->username = $username;
        $this->message  = "$username Sending bid On Your Product!! Please Visit Marketer Request Form For More Actions";
        // $this->notify = new notifications();
        // $this->notify->username = $this->username;
        // $this->notify->message = $this->message;
        // $this->notify->save();
        
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        

         return ['send-request'];
        //return new PrivateChannel('channel-name');
    }
//     public function broadcastAs() {
// return 'status-liked';
// }
}
