<?php

namespace AgeekDev\MyanmarCurrency\Traits;

use InvalidArgumentException;

trait ValidationTraitException
{
    public function checkValidationException($number)
    {
        $number_validation_regex = "/^(?:-(?:[1-9](?:\\d{0,2}(?:,\\d{3})+|\\d*))|(?:0|(?:[1-9](?:\\d{0,2}(?:,\\d{3})+|\\d*))))(?:.\\d+|)$/";
        if (preg_replace($number_validation_regex, '', $number)) {
            throw new InvalidArgumentException("Please type number only!");
        }

        if (preg_match("/[^0-9]/", $number)) {
            throw new InvalidArgumentException("Please type number only!");
        }
        if (preg_match("/^(?:0|00)\d+$/", $number)) {
            throw new InvalidArgumentException("Number should not start with 0");
        }
    }
}
