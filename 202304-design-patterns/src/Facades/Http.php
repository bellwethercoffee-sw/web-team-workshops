<?php

namespace BellwetherCoffee\DesignPatterns\Facades;

use Mrubiosan\Facade\FacadeAccessor;

class Http extends FacadeAccessor
{
    public static function getServiceName()
    {
       return 'http';
    }
}