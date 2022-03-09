<?php

use Bowero\Healthchecks\Facades\Healthchecks as HealthchecksFacade;
use Bowero\Healthchecks\Healthchecks;

it('can create a job with a name', function () {
    $job = HealthchecksFacade::job('my-first-check');
    expect($job)->toBeInstanceOf(Healthchecks::class)
        ->toHaveProperty('uuid');
});

it('can create a job with an uuid', function () {
    $job = HealthchecksFacade::uuid('c2c0be0a-94fa-4128-aa8a-cd55889cdb29');
    expect($job)->toBeInstanceOf(Healthchecks::class)
        ->toHaveProperty('uuid');
});
