<?php

/**
 * Part of the Support package.
*/

namespace myGedung\Support\Traits;

use myGedung\Support\Validator;

trait ValidatorTrait
{
    /**
     * The Validator instance.
     *
     * @var \myGedung\Support\Validator
     */
    protected $validator;

    /**
     * Returns the Validator instance.
     *
     * @return \myGedung\Support\Validator
     */
    public function getValidator()
    {
        return $this->validator;
    }

    /**
     * Sets the Validator instance.
     *
     * @param  \myGedung\Support\Validator  $validator
     * @return $this
     */
    public function setValidator(Validator $validator)
    {
        $this->validator = $validator;

        return $this;
    }
}
