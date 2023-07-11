<?php

use Bellwether\Utils\DataSigner;
use PHPUnit\Framework\TestCase;

/**
 * @test
 */
class DataSignerTest extends TestCase
{
    public function testSign()
    {
        // Prepare
        $data = base64_encode(json_encode([
            'id' => uniqid(),
        ]));
        $signature = '';
        // Run
        $signer = DataSigner::signer()
            ->generateKeys()
            ->sign($data, $signature);
        // Run
        $this->assertNotEmpty($signature);
    }
}