<?php

namespace AgeekDev\MyanmarCurrency\Tests;

use AgeekDev\MyanmarCurrency\MyanmarCurrency;
use AgeekDev\MyanmarCurrency\MyanmarCurrencyServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected $currency;

    protected function setUp(): void
    {
        parent::setUp();
        $this->currency = new MyanmarCurrency();
        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'MyanmarCurrency\\MyanmarCurrency\\Database\\Factories\\' . class_basename($modelName) . 'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            MyanmarCurrencyServiceProvider::class,
        ];
    }
}
