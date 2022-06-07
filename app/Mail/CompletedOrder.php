<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use App\Models\Order;

class CompletedOrder extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;
    protected $newOrder;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, Order $newOrder)
    {
        $this->user = $user;
        $this->order = $newOrder;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.completed-order')
                    ->with([
                        'name' => $this->user->name,
                        'order_id' => $this->order->orderId
                    ]);
    }
}
