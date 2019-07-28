<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Account;
use App\Transaction;
class TransactionEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $text;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Account $account,Transaction $transaction)
    {
        $this->account=$account;
        $this->transaction=$transaction;
        //
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('my-channel');
        // return new Channel('my-channel');
        // return ['my-channel'];
    }
    public function broadcastAs()
    {
        // return 'transaction-alert';
        return 'my-event';
    }
}
