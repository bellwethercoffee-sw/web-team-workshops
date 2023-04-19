<?php

use BellwethercoffeeSw\EchoModule\Printer;
use GuzzleHttp\Client;
use Mrubiosan\Facade\ServiceLocatorAdapter\ArrayAccessAdapter;
use Mrubiosan\Facade\FacadeLoader;

$psrAdaptedContainer = new ArrayAccessAdapter(new ArrayObject([
    'http' => new Client(),
    //'printer' => new Printer(),
]));

FacadeLoader::init($psrAdaptedContainer, [
    'Http' => 'BellwetherCoffee\DesignPatterns\Facades\Http',
    'Printer' => 'BellwetherCoffee\DesignPatterns\Facades\Printer',
]);