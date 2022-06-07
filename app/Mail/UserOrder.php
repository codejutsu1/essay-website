<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use App\Models\Order;

class UserOrder extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected $user;
    protected $order;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, Order $order)
    {
        $this->user = $user;
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.user-order')
                    ->with([
                        'name' => $this->user->name,
                        'order_name' => $this->order->orderId
                    ]);
    }
}
