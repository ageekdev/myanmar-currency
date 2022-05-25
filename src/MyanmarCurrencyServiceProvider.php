<?php

namespace AgeekDev\MyanmarCurrency;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MyanmarCurrencyServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('myanmar-currency');
    }

    public function bootingPackage()
    {
        $this->app->singleton('myanmar-currency', function ($app) {
            return new MyanmarCurrency();
        });
    }
}
