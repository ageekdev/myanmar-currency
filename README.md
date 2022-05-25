<h1 align="center">Myanmar Sar Currency</h1>

[![Laravel 8.x](https://img.shields.io/badge/Laravel-8.x-red.svg?style=flat-square)](https://laravel.com/docs/8.x)
[![Laravel 9.x](https://img.shields.io/badge/Laravel-9.x-red.svg?style=flat-square)](https://laravel.com/docs/9.x)
[![PHP 8.x](https://img.shields.io/badge/php-%5E8.0-blue?style=flat-square)](https://www.php.net/releases/8.0/en.php)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/genie-fintech/laravel-dev-login/run-tests?label=tests&style=flat-square)](https://github.com/genie-fintech/dev-login/actions?query=workflow%3Arun-tests+branch%3Amain)

## Myanmar Sar Currency

This is a laravel library for convert myanmar kyats number to myanmar sar number.
(eg."1000=>တစ်ထောင်")

## Installation

You can install this package via composer using this command:

```bash
composer require myanmar-currency/myanmar-currency
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
