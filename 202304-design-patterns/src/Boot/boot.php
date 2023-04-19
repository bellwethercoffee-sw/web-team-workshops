<?php

use BellwethercoffeeSw\DesignPatterns\Modules\Markdown;
use BellwethercoffeeSw\EchoModule\Printer;
use GuzzleHttp\Client;
use Mrubiosan\Facade\ServiceLocatorAdapter\ArrayAccessAdapter;
use Mrubiosan\Facade\FacadeLoader;

/**
 * Boot PHP script that initializes or facades.
 * 
 * Facade pattern.
 * Dependency Injection pattern.
 * Singleton pattern.
 * 
 * @link https://github.com/mrubiosan/facade
 */

FacadeLoader::init(
    new ArrayAccessAdapter(new ArrayObject([
        'http' => new Client(),
        'printer' => new Printer(),
        'markdown' => Markdown::instance(),
    ])),
    [
        'Http' => 'BellwethercoffeeSw\DesignPatterns\Facades\Http',
        'Printer' => 'BellwethercoffeeSw\DesignPatterns\Facades\Printer',
        'Markdown' => 'BellwethercoffeeSw\DesignPatterns\Facades\Markdown',
    ]
);