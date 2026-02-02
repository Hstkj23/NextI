<?php
/**
 * Tests for IPFSRarity
 */

use PHPUnit\Framework\TestCase;
use Ipfsrarity\Ipfsrarity;

class IpfsrarityTest extends TestCase {
    private Ipfsrarity $instance;

    protected function setUp(): void {
        $this->instance = new Ipfsrarity(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Ipfsrarity::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
