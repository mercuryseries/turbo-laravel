<?php

namespace Tonysm\TurboLaravel;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Tonysm\TurboLaravel\TurboLaravel
 */
class TurboLaravelFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'turbo-laravel';
    }
}