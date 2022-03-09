# A Laravel wrapper for healthchecks.io

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bowero/laravel-healthchecks.svg?style=flat-square)](https://packagist.org/packages/bowero/laravel-healthchecks)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/bowero/laravel-healthchecks.io/run-tests?label=tests)](https://github.com/bowero/laravel-healthchecks/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/bowero/laravel-healthchecks.io/Check%20&%20fix%20styling?label=code%20style)](https://github.com/bowero/laravel-healthchecks/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/bowero/laravel-healthchecks.svg?style=flat-square)](https://packagist.org/packages/bowero/laravel-healthchecks)

[Healthchecks.io](https://healthchecks.io) is a service that monitors your cron jobs and alerts you when they are down.
This package is a wrapper for the Healthchecks.io API.

## Installation

You can install the package via composer:

```bash
composer require bowero/laravel-healthchecks
```

You then need to publish the configuration file:

```bash
php artisan vendor:publish --tag="laravel-healthchecks-config"
```

This is the contents of the published config file:

```php
return [

    /*
     * The URL endpoint of healthchecks.io
     */
    'url' => 'https://hc-ping.com/',

    /*
     * Your registered jobs
     */
    'jobs' => [
        'my-first-check' => [
            'uuid' => 'c2c0be0a-94fa-4128-aa8a-cd55889cdb29',
        ],
    ],
];

```

That's it! you can now use the package in your Laravel application. It is automatically registered in your service
provider.

## Usage

```php
use Bowero\Healthchecks\Facades\Healthchecks;

/*
 * Create a job
 * (the job is registered in healthchecks.php)
 */
$job = Healthchecks::job('my-first-check');

/*
 * Create a job based on the uuid
 */
$job = Healthchecks::uuid('c2c0be0a-94fa-4128-aa8a-cd55889cdb29');

/*
 * Mark the job as started
 */
$job->start();

/*
 * Mark the job as succesful
 */
$job->success();

/*
 * Mark the job as failed
 */
$job->failure();

/*
 * Mark the job as exited with a status code
 */
$job->exitWithStatus(1);
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Robin Martijn](https://github.com/Bowero)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
