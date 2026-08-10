<?php
/**
 * Tests for AutoOrchestrator
 */

use PHPUnit\Framework\TestCase;
use Autoorchestrator\Autoorchestrator;

class AutoorchestratorTest extends TestCase {
    private Autoorchestrator $instance;

    protected function setUp(): void {
        $this->instance = new Autoorchestrator(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Autoorchestrator::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
