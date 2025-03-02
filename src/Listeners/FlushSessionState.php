<?php

namespace Laravel\Octane\Listeners;

class FlushSessionState
{
    /**
     * Handle the event.
     *
     * @param  mixed  $event
     * @return void
     */
    public function handle($event): void
    {
        $driver = $event->sandbox->make('session')->driver();

        $driver->flush();
        $driver->regenerate();
    }
}
