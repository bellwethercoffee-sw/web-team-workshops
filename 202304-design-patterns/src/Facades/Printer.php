<?php

namespace BellwetherCoffee\DesignPatterns\Facades;

use Mrubiosan\Facade\FacadeAccessor;

class Printer extends FacadeAccessor
{
    public static function getServiceName()
    {
       return 'printer';
    }
}