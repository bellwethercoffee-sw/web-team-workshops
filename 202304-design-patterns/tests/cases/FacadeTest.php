<?php

use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testHttpFacade()
    {
        // Run
        $response = Http::request(
            'GET',
            'https://jsonplaceholder.typicode.com/todos/1'
        );
        // Assert
        $this->assertEquals(200, $response->getStatusCode());
    }
    /*
    public function testPrinterFacade()
    {
        // Run
        ob_clean();
        Printer::print('test');
        $output = ob_get_clean();
        // Assert
        $this->assertEquals('test', $output);
    }
    */
}