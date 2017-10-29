<?php

/**
 * Part of the Support package.
*/

namespace myGedung\Support\Handlers;

use Illuminate\Contracts\Container\Container;

class EventHandler
{
    /**
     * The container instance.
     *
     * @var \Illuminate\Contracts\Container\Container
     */
    protected $app;

    /**
     * Constructor.
     *
     * @param  \Illuminate\Contracts\Container\Container  $app
     * @return void
     */
    public function __construct(Container $app)
    {
        $this->app = $app;
    }

    /**
     * Dynamically retrieve objects from the container.
     *
     * @param  string  $key
     * @return mixed
     */
    public function __get($key)
    {
        return $this->app[$key];
    }
}
