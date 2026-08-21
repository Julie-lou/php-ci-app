<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../index.php';

class AppTest extends TestCase
{
    public function testAdd(): void
    {
        $this->assertEquals(5, add(2, 3));
    }

    public function testGreet(): void
    {
        $this->assertEquals(
            "Hello, Jenkins! Welcome to PHP CI.",
            greet("Jenkins")
        );
    }
}
