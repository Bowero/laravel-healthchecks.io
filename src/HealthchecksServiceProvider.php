<?php

namespace Bowero\Healthchecks;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Bowero\Healthchecks\Commands\HealthchecksCommand;

class HealthchecksServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-healthchecks')
            ->hasConfigFile();
    }
}
