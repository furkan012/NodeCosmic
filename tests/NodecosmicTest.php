<?php
/**
 * Tests for NodeCosmic
 */

use PHPUnit\Framework\TestCase;
use Nodecosmic\Nodecosmic;

class NodecosmicTest extends TestCase {
    private Nodecosmic $instance;

    protected function setUp(): void {
        $this->instance = new Nodecosmic(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nodecosmic::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
