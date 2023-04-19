<?php

namespace BellwethercoffeeSw\DesignPatterns\Facades;

use Mrubiosan\Facade\FacadeAccessor;

/**
 * Markdown facade inside project demo.
 * 
 * Facade pattern.
 * Module pattern.
 * @link https://github.com/mrubiosan/facade
 */
class Markdown extends FacadeAccessor
{
    /**
     * Returns service name identifier.
     * 
     * @return string
     */
    public static function getServiceName()
    {
       return 'markdown';
    }
}