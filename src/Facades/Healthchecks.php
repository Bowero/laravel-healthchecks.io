<?php

namespace Bowero\Healthchecks\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bowero\Healthchecks\Healthchecks
 */
class Healthchecks extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Bowero\Healthchecks\Healthchecks';
    }
}
