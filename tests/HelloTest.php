<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../hello.php';

class HelloTest extends TestCase
{
    public function testSayHello(): void
    {
        $this->assertEquals(
            "Hello, Jenkins! This is from the new branch.",
            sayHello("Jenkins")
        );
    }
}
