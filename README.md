# filament-package-template

[![Latest Version on Packagist](https://img.shields.io/packagist/v/author-template/filament-package-template.svg?style=flat-square)](https://packagist.org/packages/author-template/filament-package-template)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/author-template/filament-package-template/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/author-template/filament-package-template/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/author-template/filament-package-template/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/author-template/filament-package-template/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/author-template/filament-package-template.svg?style=flat-square)](https://packagist.org/packages/author-template/filament-package-template)

This should be you package description and what it does.

## Getting Started

Clone this boilerplate repository then run the `./init.sh` bash script.

```bash
cd filament-package-template && ./init.sh <vendor-name> <package-name>
```

To trigger GitHub Workflow formatter job, use `!format` in a commit message.

Visit [spatie-package-tools](https://github.com/spatie/filament-package-tools)
to learn more about how Package Service Provider work.

## Development

To work with assets, first build the assets, then you have to publish the assets
in any project that uses the plugin.

Publishing Filament assets:

```bash
php artisan filament:assets
```

### Access Plugin Class

You may access plugin class using the `filament` static function:

```php
\AuthorTemplate\FilamentPackageTemplate\FilamentPackageTemplatePlugin::filament->hasBadges()
```

## Installation

You can install the package via composer:

```bash
composer require author-template/filament-package-template
```

You may directly also use direct repository url in `composer.json`:

```json
"require": {
  "author-template/filament-package-template": "dev-main"
}
"repositories": [
  {
    "type": "git",
    "url": "https://github.com/author-template/filament-package-template.git"
  }
]
```

## Usage

Give a brief instruction how others may use your package.

### Testing

```bash
composer test
```

To trigger GitHub Workflow job, use `!test` in a commit message.

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed
recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

Please email `security@author-template.com` for any security issues.

## Credits

-   [AlanD20](https://github.com/AlanD20)
-   [All Contributors](../../contributors)

## License

This repository is under [MIT License (MIT)](LICENSE).
