<?php

/**
 * Part of the Support package.
*/

namespace myGedung\Support\Tests\Traits;

use PHPUnit\Framework\TestCase;
use myGedung\Support\Traits\NamespacedEntityTrait;

class NamespacedEntityTraitTest extends TestCase
{
    /** @test **/
    public function it_can_get_and_set_the_entity_namespace()
    {
        $entity = new NamespacedEntityTraitStub;

        $this->assertSame('myGedung\Support\Tests\Traits\NamespacedEntityTraitStub', $entity->getEntityNamespace());

        $entity->setEntityNamespace('Foo\Bar');

        $this->assertSame('Foo\Bar', $entity->getEntityNamespace());
    }
}

class NamespacedEntityTraitStub
{
    use NamespacedEntityTrait;

    protected static $entityNamespace;
}
