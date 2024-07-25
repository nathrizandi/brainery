<?php

namespace App\Listeners;

use App\Events\ActionLogged;
use App\Models\Log;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LogAction
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     */
    public function handle(ActionLogged $event): void
    {
        Log::create([
            'action' => $event->action,
            'description' => $event->description,
        ]);
    }
}