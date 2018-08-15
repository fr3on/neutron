# Neutron package for Laravel.

[![Version](https://poser.pugx.org/fr3on/neutron/v/stable.svg)](https://github.com/fr3on/neutron/releases)
[![Quality](https://scrutinizer-ci.com/g/fr3on/neutron/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/fr3on/neutron)
[![StyleCI](https://styleci.io/repos/102290249/shield?style=flat&branch=master)](https://styleci.io/repos/102290249)
[![Downloads](https://poser.pugx.org/fr3on/neutron/d/total.svg)](https://github.com/fr3on/neutron)
[![License](https://poser.pugx.org/fr3on/neutron/license.svg)](LICENSE.md)

## Getting Started

### 1. Install

Run the following command:

```
composer require fr3on/neutron
```

### 2. Register (for Laravel < 5.5)

Register the service provider in ``config/app.php``

```php
Fr3on\Neutron\Provider::class,
```

Add alias if you want to use the facade.

```php
'Neutron'   => Fr3on\Neutron\Facade::class,
```

### 3. Publish

Publish config, migration and blade files.

```
php artisan vendor:publish --tag=neutron
```

## Changelog

Please see [Releases](../../releases) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email hello@asanai.com instead of using the issue tracker.

## Credits

- [Pharaoh](https://github.com/fr3on)

## License

The MIT License (MIT). Please see [LICENSE](LICENSE.md) for more information.