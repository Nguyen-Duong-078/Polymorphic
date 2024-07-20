<?php

namespace App\Listeners;

use App\Events\OrderShipped;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LogOrderShipped
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
        //
    }
}
