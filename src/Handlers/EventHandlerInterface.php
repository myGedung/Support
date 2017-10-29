<?php

/**
 * Part of the Support package.
*/

namespace myGedung\Support\Handlers;

use Illuminate\Contracts\Events\Dispatcher;

interface EventHandlerInterface
{
    /**
     * Registers the event listeners using the given dispatcher instance.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $dispatcher
     * @return void
     */
    public function subscribe(Dispatcher $dispatcher);
}
