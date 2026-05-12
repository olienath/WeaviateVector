<?php
/**
 * Tests for WeaviateVector
 */

use PHPUnit\Framework\TestCase;
use Weaviatevector\Weaviatevector;

class WeaviatevectorTest extends TestCase {
    private Weaviatevector $instance;

    protected function setUp(): void {
        $this->instance = new Weaviatevector(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Weaviatevector::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
