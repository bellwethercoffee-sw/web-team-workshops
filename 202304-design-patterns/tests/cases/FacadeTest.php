<?php

use PHPUnit\Framework\TestCase;

/**
 * Test facades functionality.
 */
class FacadeTest extends TestCase
{
    /**
     * @group facades
     */
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
    /**
     * @group facades
     */
    public function testPrinterFacade()
    {
        // Run
        ob_start();
        Printer::print('test');
        $output = ob_get_clean();
        // Assert
        $this->assertEquals('test', $output);
    }
}