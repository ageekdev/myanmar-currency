<?php

namespace AgeekDev\MyanmarCurrency\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MyanmarCurrency\MyanmarCurrency\MyanmarCurrency
 * * @method static string convertMyanmarText(int $number)
 */
class MyanmarCurrency extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'myanmar-currency';
    }
}
