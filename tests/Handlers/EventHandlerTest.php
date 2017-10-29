<?php

/**
 * Part of the Support package.
*/

namespace myGedung\Support\Tests\Handlers;

use PHPUnit\Framework\TestCase;
use Illuminate\Container\Container;
use myGedung\Support\Handlers\EventHandler;

class EventHandlerTest extends TestCase
{
    /** @test **/
    public function it_can_be_instantiated()
    {
        new EventHandlerStub(new Container);
    }

    /** @test */
    public function it_can_retrieve_dynamic_objects_from_the_container()
    {
        $container = new Container;
        $container->bind('foo', function () { return 'bar'; });

        $handler = new EventHandlerStub($container);

        $this->assertSame('bar', $handler->foo);
    }
}

class EventHandlerStub extends EventHandler
{
}
