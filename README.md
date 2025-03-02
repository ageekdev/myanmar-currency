<h1 align="center">Myanmar Sar Currency</h1>

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ageekdev/myanmar-currency.svg?style=flat-square)](https://packagist.org/packages/ageekdev/myanmar-currency)
[![Laravel 9.x](https://img.shields.io/badge/Laravel-9.x-red.svg?style=flat-square)](https://laravel.com/docs/9.x)
[![Laravel 10.x](https://img.shields.io/badge/Laravel-10.x-red.svg?style=flat-square)](https://laravel.com/docs/10.x)
[![Laravel 11.x](https://img.shields.io/badge/Laravel-11.x-red.svg?style=flat-square)](https://laravel.com/docs/11.x)
[![Laravel 12.x](https://img.shields.io/badge/Laravel-12.x-red.svg?style=flat-square)](https://laravel.com/docs/12.x)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/ageekdev/myanmar-currency/run-tests.yml?label=tests&style=flat-square)](https://github.com/ageekdev/myanmar-currency/actions)

## Myanmar Sar Currency

This is a laravel library for convert myanmar kyats number to myanmar sar number.
(eg."1000=>တစ်ထောင်")

## Installation

You can install this package via composer using this command:

```bash
composer require ageekdev/myanmar-currency
```

The package will automatically register itself.

## Usage

Import namespace.

```php
use AgeekDev\MyanmarCurrency\Facades\MyanmarCurrency;
```

```php
# returns 'တစ်ထောင်'
return MyanmarCurrency::convertMyanmarText("1000");

# returns 'ဆယ်သိန်း'
return MyanmarCurrency::convertMyanmarText("1000000");
```

## Notes

- Currently, only allow numeric value.
- Currently, support up to "10" numeric.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
