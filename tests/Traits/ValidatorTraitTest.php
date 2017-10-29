<?php

/**
 * Part of the Support package.
*/

namespace myGedung\Support\Tests\Traits;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use myGedung\Support\Traits\ValidatorTrait;

class ValidatorTraitTest extends TestCase
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
    public function it_can_set_and_retrieve_the_validator_instance()
    {
        $validator = new ValidatorTraitStub;

        $mailer = m::mock('myGedung\Support\Validator');

        $validator->setValidator($mailer);

        $this->assertSame($validator->getValidator(), $mailer);
    }
}

class ValidatorTraitStub
{
    use ValidatorTrait;
}
