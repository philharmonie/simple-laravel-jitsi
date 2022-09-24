<?php

namespace Harmoniemedia\SimpleLaravelJitsi;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Harmoniemedia\SimpleLaravelJitsi\Skeleton\SkeletonClass
 */
class SimpleLaravelJitsiFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'simple-laravel-jitsi';
    }
}
