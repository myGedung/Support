<?php

/**
 * Part of the Support package.
*/

namespace myGedung\Support\Tests\Traits;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use myGedung\Support\Traits\ContainerTrait;

class ContainerTraitTest extends TestCase
{
    /**
     * Close mockery.
     *
     * @return void
     */
    public function tearDown()
    {
        m::close();
    }

    /** @test **/
    public function it_can_set_and_retrieve_the_container()
    {
        $containerTrait = new ContainerTraitStub;

        $container = m::mock('Illuminate\Contracts\Container\Container');

        $containerTrait->setContainer($container);

        $this->assertSame($containerTrait->getContainer(), $container);
    }
}

class ContainerTraitStub
{
    use ContainerTrait;
}
