<?php

use BellwethercoffeeSw\EchoModule\Printer;
use GuzzleHttp\Client;
use Mrubiosan\Facade\ServiceLocatorAdapter\ArrayAccessAdapter;
use Mrubiosan\Facade\FacadeLoader;

/**
 * Boot PHP script that initializes or facades.
 * 
 * Facade pattern.
 * Dependency Injection pattern.
 * 
 * @link https://github.com/mrubiosan/facade
 */

$psrAdaptedContainer = new ArrayAccessAdapter(new ArrayObject([
    'http' => new Client(),
    'printer' => new Printer(),
]));

FacadeLoader::init($psrAdaptedContainer, [
    'Http' => 'BellwethercoffeeSw\DesignPatterns\Facades\Http',
    'Printer' => 'BellwethercoffeeSw\DesignPatterns\Facades\Printer',
]);