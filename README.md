# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/philharmonie/simple-laravel-jitsi.svg?style=flat-square)](https://packagist.org/packages/philharmonie/simple-laravel-jitsi)
[![Total Downloads](https://img.shields.io/packagist/dt/philharmonie/simple-laravel-jitsi.svg?style=flat-square)](https://packagist.org/packages/philharmonie/simple-laravel-jitsi)
![GitHub Actions](https://github.com/philharmonie/simple-laravel-jitsi/actions/workflows/main.yml/badge.svg)

Simple Jitsi Integration for Laravel to create Jitsi meetings

## Installation

You can install the package via composer:

```bash
composer require philharmonie/simple-laravel-jitsi
```

## Usage

```php
$meeting_room_url = (new SimpleLaravelJitsi)->create_meeting_room_url();
```

### Testing

Not yet implemented.

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email phil@harmonie.media instead of using the issue tracker.

## Credits

-   [Phil Harmonie](https://github.com/philharmonie)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
