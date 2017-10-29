<?php

/**
 * Part of the Support package.
*/

namespace myGedung\Support\Traits;

use myGedung\Support\Mailer;

trait MailerTrait
{
    /**
     * The Mailer instance.
     *
     * @var \myGedung\Support\Mailer
     */
    protected $mailer;

    /**
     * Returns the Mailer instance.
     *
     * @return \myGedung\Support\Mailer
     */
    public function getMailer()
    {
        return $this->mailer;
    }

    /**
     * Sets the Mailer instance.
     *
     * @param  \myGedung\Support\Mailer  $mailer
     * @return $this
     */
    public function setMailer(Mailer $mailer)
    {
        $this->mailer = $mailer;

        return $this;
    }
}
