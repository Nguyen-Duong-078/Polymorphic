<?php

namespace App\Listeners;

use App\Events\OrderShipped;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendNotification implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {

    }
    public $name;

    /**
     * Handle the event.
     */
    public function handle(OrderShipped $event): void
    {
        $data = ['name'];

        Mail::send('mail', $data, function ($message) {
            $message->to('duongnvph33164@fpt.edu.vn', 'Tutorials Point')
                ->subject('Laravel Basic Testing Mail');
        });
        Log::debug("Basic Email Sent. Check your inbox.");
    }
}
