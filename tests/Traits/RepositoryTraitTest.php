<?php

/**
 * Part of the Support package.
*/

namespace myGedung\Support\Tests\Traits;

use PHPUnit\Framework\TestCase;
use myGedung\Support\Traits\RepositoryTrait;

class RepositoryTraitTest extends TestCase
{
    /** @test **/
    public function it_can_set_and_retrieve_the_model()
    {
        $repository = new RepositoryTraitStub;

        $repository->setModel('FooModelStub');

        $this->assertEquals('FooModelStub', $repository->getModel());
    }

    /** @test **/
    public function it_can_create_a_model()
    {
        $repository = new RepositoryTraitStub;

        $repository->setModel('StdClass');

        $this->assertInstanceOf('StdClass', $repository->createModel());
    }

    /** @test */
    public function it_can_call_dynamic_methods()
    {
        $repository = new RepositoryTraitStub;

        $repository->setModel('myGedung\Support\Tests\Traits\FooModelStub');

        $this->assertEquals('myGedung\Support\Tests\Traits\FooModelStub', $repository->getModel());

        $this->assertSame('bar', $repository->foo());
    }
}

class RepositoryTraitStub
{
    use RepositoryTrait;
}

class FooModelStub
{
    public function foo()
    {
        return 'bar';
    }
}
