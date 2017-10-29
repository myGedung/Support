<?php

/**
 * Part of the Support package.
*/

namespace myGedung\Support\Tests\Traits;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use myGedung\Support\Traits\MailerTrait;

class MailerTraitTest extends TestCase
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
    public function it_can_set_and_retrieve_the_mailer_instance()
    {
        $mailerTrait = new MailerTraitStub;

        $mailer = m::mock('myGedung\Support\Mailer');

        $mailerTrait->setMailer($mailer);

        $this->assertSame($mailerTrait->getMailer(), $mailer);
    }
}

class MailerTraitStub
{
    use MailerTrait;
}
