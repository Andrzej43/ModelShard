<?php
/**
 * Tests for ModelShard
 */

use PHPUnit\Framework\TestCase;
use Modelshard\Modelshard;

class ModelshardTest extends TestCase {
    private Modelshard $instance;

    protected function setUp(): void {
        $this->instance = new Modelshard(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Modelshard::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
