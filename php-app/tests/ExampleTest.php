<?php
use PHPUnit\Framework\TestCase;

require_once './src/index.php';

class ExampleTest extends TestCase {
    public function testAddition() {
        $this->assertEquals(3, add(1, 2));
    }
}
