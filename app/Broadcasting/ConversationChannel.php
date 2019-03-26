<?php

namespace App\Broadcasting;

use App\User;
use App\Transaction;

class ConversationChannel
{
    /**
     * Create a new channel instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Authenticate the user's access to the channel.
     *
     * @param  \App\User  $user
     * @return array|bool
     */
    public function join(User $user,Transaction $transaction)
    {
        return $transaction->account->user->contains($user);
    }
}
