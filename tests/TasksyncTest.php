<?php
/**
 * Tests for TaskSync
 */

use PHPUnit\Framework\TestCase;
use Tasksync\Tasksync;

class TasksyncTest extends TestCase {
    private Tasksync $instance;

    protected function setUp(): void {
        $this->instance = new Tasksync(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tasksync::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
