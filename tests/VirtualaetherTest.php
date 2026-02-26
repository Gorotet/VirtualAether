<?php
/**
 * Tests for VirtualAether
 */

use PHPUnit\Framework\TestCase;
use Virtualaether\Virtualaether;

class VirtualaetherTest extends TestCase {
    private Virtualaether $instance;

    protected function setUp(): void {
        $this->instance = new Virtualaether(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Virtualaether::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
