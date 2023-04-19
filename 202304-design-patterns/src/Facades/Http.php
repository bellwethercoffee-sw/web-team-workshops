<?php

namespace BellwethercoffeeSw\DesignPatterns\Facades;

use Mrubiosan\Facade\FacadeAccessor;

/**
 * HTTP facade inside project demo.
 * 
 * Facade pattern.
 * Module pattern.
 * @link https://github.com/mrubiosan/facade
 */
class Http extends FacadeAccessor
{
    /**
     * Returns service name identifier.
     * 
     * @return string
     */
    public static function getServiceName()
    {
        return 'http';
    }
}